CREATE TABLE IF NOT EXISTS lm_Colors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    hex VARCHAR(7) NOT NULL,
    rgb VARCHAR(12) NOT NULL,
    rgba VARCHAR(16) NOT NULL,
    hsl VARCHAR(12) NOT NULL,
    notes VARCHAR(255)
);

DELIMITER $$

CREATE TRIGGER validate_color_codes
BEFORE INSERT ON lm_Colors
FOR EACH ROW
BEGIN
    -- Validazione del formato HEX
    IF NEW.hex NOT REGEXP '^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Formato HEX non valido';
    END IF;

    -- Validazione del formato RGB
    IF NEW.rgb NOT REGEXP '^rgb\\(\\d{1,3},\\s*\\d{1,3},\\s*\\d{1,3}\\)$' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Formato RGB non valido';
    END IF;

    -- Validazione del formato RGBA
    IF NEW.rgba NOT REGEXP '^rgba\\(\\d{1,3},\\s*\\d{1,3},\\s*\\d{1,3},\\s*(0(\\.\\d+)?|1(\\.0+)?)\\)$' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Formato RGBA non valido';
    END IF;

    -- Validazione del formato HSL
    IF NEW.hsl NOT REGEXP '^hsl\\(\\d{1,3},\\s*\\d{1,3}%,\\s*\\d{1,3}%\\)$' THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Formato HSL non valido';
    END IF;
END$$

DELIMITER ;
