DELIMITER //

CREATE PROCEDURE CleanupInactiveUsersAndOrphanedPeople()
BEGIN
    -- Elimina i record dalla tabella users che hanno il token ancora attivo, is_active false e non hanno un match con la tabella persone
    DELETE FROM users
    WHERE token IS NOT NULL
    AND is_active = FALSE
    AND NOT EXISTS (
        SELECT 1
        FROM persone p
        WHERE p.user_id = users.id
    );

    -- Elimina i record dalla tabella persone che non hanno un match con la tabella users
    DELETE FROM persone
    WHERE NOT EXISTS (
        SELECT 1
        FROM users u
        WHERE u.id = persone.user_id
    );
END //

DELIMITER ;

DELIMITER //

CREATE EVENT IF NOT EXISTS CleanupEvent
ON SCHEDULE EVERY 1 WEEK
STARTS CURRENT_TIMESTAMP
DO CALL CleanupInactiveUsersAndOrphanedPeople();

DELIMITER ;

-- Verifica se il programmatore di eventi è abilitato
SHOW VARIABLES LIKE 'event_scheduler';

-- Abilita il programmatore di eventi se non è abilitato
SET GLOBAL event_scheduler = ON;
