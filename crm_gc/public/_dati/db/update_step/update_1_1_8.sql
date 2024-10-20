CREATE TABLE IF NOT EXISTS lm_CrudLogs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    message VARCHAR(255),
    action INT,
    before_state TEXT,
    after_state TEXT,
    user_id INT,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES lm_Users(id) ON DELETE CASCADE ON UPDATE CASCADE
);
