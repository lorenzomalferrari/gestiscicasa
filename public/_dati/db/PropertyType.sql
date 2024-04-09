CREATE TABLE PropertyType (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description VARCHAR(255) NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    notes TEXT
);

INSERT INTO PropertyType (description, creationDate, updateData, notes) VALUES
('Building', '2024-04-02', NULL, NULL),
('Apartment', '2024-04-02', NULL, NULL),
('Office', '2024-04-02', NULL, NULL),
('Villa', '2024-04-02', NULL, NULL),
('Warehouse', '2024-04-02', NULL, NULL),
('Land', '2024-04-02', NULL, NULL);
