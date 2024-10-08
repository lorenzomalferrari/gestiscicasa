CREATE TABLE lmgc_ProfileTypes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(2) NOT NULL,
    description VARCHAR(255) NOT NULL,
    notes TEXT,
    creationDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updateDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento dei record fissi
INSERT INTO lmgc_ProfileTypes (code, description, notes) VALUES
('PE', 'Personal', 'Individual profile'),
('BU', 'Business', 'Profile for companies and organizations');
