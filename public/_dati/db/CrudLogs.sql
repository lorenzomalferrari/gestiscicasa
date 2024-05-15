CREATE TABLE IF NOT EXISTS lmgc_CrudLogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    timestamp TIMESTAMP,
    message VARCHAR(255),
    action int,
    before_state TEXT,
    after_state TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES lmgc_Users(id) ON DELETE CASCADE ON UPDATE CASCADE
);
