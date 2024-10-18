CREATE TABLE lm_ProfileTypes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(2) NOT NULL,
    description VARCHAR(255) NOT NULL,
    notes TEXT,
    create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento dei record fissi
INSERT INTO lm_ProfileTypes (code, description, notes) VALUES
('PE', 'Personal', 'Individual profile'),
('BU', 'Business', 'Profile for companies and organizations');
