CREATE TABLE IF NOT EXISTS lm_CrudLogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    timestamp TIMESTAMP,
    message VARCHAR(255),
    action int,
    before_state TEXT,
    after_state TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES lm_Users(id) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE lm_CrudLogs DROP FOREIGN KEY (
    SELECT CONSTRAINT_NAME
    FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
    WHERE TABLE_NAME = 'lm_CrudLogs'
    AND COLUMN_NAME = 'user_id'
    AND REFERENCED_TABLE_NAME = 'lm_Users';
);
