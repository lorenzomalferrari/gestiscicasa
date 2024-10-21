CREATE TABLE IF NOT EXISTS TablesColumnsVisited (
    id INT AUTO_INCREMENT PRIMARY KEY,
    column_name VARCHAR(255) NOT NULL,
    table_name VARCHAR(255) NOT NULL,
    visit_count INT NOT NULL DEFAULT 0,
    user_id INT NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES lm_Users(id),
    UNIQUE KEY unique_user_column_table (user_id, column_name, table_name)
);
