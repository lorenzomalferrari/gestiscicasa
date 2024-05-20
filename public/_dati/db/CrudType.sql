CREATE TABLE IF NOT EXISTS lmgc_CrudType (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `nome` VARCHAR(255),
  `azione` ENUM('CREATE', 'READ', 'UPDATE', 'DELETE'),
  `valore` DECIMAL(10, 2),
  `data_creazione` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `data_aggiornamento` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `note` TEXT,
  UNIQUE KEY `unique_action_name_value_note` (`azione`, `nome`, `valore`, `note`)
);

INSERT INTO lmgc_CrudType (nome, azione, valore, note)
VALUES ('INSERT', 'CREATE', 1, 'Inserimento della nuova voce')
ON DUPLICATE KEY UPDATE
timestamp = VALUES(timestamp),
message = VALUES(message),
action = VALUES(action),
before_state = VALUES(before_state),
after_state = VALUES(after_state),
user_id = VALUES(user_id);

INSERT INTO lmgc_CrudType (nome, azione, valore, note)
VALUES ('SELECT', 'READ', 2, 'Lettura del record')
ON DUPLICATE KEY UPDATE
timestamp = VALUES(timestamp),
message = VALUES(message),
action = VALUES(action),
before_state = VALUES(before_state),
after_state = VALUES(after_state),
user_id = VALUES(user_id);

INSERT INTO lmgc_CrudType (nome, azione, valore, note)
VALUES ('UPDATE', 'UPDATE', 3, 'Aggiornamento del record')
ON DUPLICATE KEY UPDATE
timestamp = VALUES(timestamp),
message = VALUES(message),
action = VALUES(action),
before_state = VALUES(before_state),
after_state = VALUES(after_state),
user_id = VALUES(user_id);

INSERT INTO lmgc_CrudType (nome, azione, valore, note)
VALUES ('DELETE', 'DELETE', 4, 'Azione di cancellazione')
ON DUPLICATE KEY UPDATE
timestamp = VALUES(timestamp),
message = VALUES(message),
action = VALUES(action),
before_state = VALUES(before_state),
after_state = VALUES(after_state),
user_id = VALUES(user_id);
