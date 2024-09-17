CREATE TABLE IF NOT EXISTS lmgc_PropertyTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    notes TEXT
);

INSERT INTO lmgc_PropertyTypes (description, creationDate, updateDate, notes) VALUES
('Building', '2024-04-02', NULL, NULL),
('Apartment', '2024-04-02', NULL, NULL),
('Office', '2024-04-02', NULL, NULL),
('Villa', '2024-04-02', NULL, NULL),
('Warehouse', '2024-04-02', NULL, NULL),
('Land', '2024-04-02', NULL, NULL);
