CREATE TABLE IF NOT EXISTS lmgc_UsageDestinations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    notes TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    code VARCHAR(50),
    colorId INT,
    FOREIGN KEY (colorId) REFERENCES lmgc_Colors(id)
);

ALTER TABLE lmgc_UsageDestinations
ADD CONSTRAINT UC_Name UNIQUE (name); -- Assicura che il nome sia univoco

-- Assicura che la chiave esterna sia univoca
ALTER TABLE lmgc_UsageDestinations
ADD CONSTRAINT UC_ColorId UNIQUE (colorId);
