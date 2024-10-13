CREATE TABLE IF NOT EXISTS lmgc_PropertyTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO PropertyTypes (name) VALUES
('Building'),
('Apartment'),
('Office'),
('Villa'),
('Warehouse'),
('Land');
