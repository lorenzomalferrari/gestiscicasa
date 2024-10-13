CREATE TABLE IF NOT EXISTS lmgc_VisitedColumnsTable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    column_name VARCHAR(255) NOT NULL,
    table_name VARCHAR(255) NOT NULL,
    visit_count INT NOT NULL DEFAULT 0,
    user_id INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES lmgc_Users(id),
    UNIQUE KEY unique_user_column_table (user_id, column_name, table_name)
);
