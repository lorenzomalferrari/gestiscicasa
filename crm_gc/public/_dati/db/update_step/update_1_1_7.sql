CREATE TABLE IF NOT EXISTS lm_PathVisitated (
    id INT AUTO_INCREMENT PRIMARY KEY,
    path VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    count INT NOT NULL,
    UNIQUE (user_id, path)
);
