CREATE TABLE UsageDestinations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    notes TEXT,
    creationDate DATETIME NOT NULL,
    updateDate DATETIME NOT NULL,
    code VARCHAR(50),
    colorId INT,
    FOREIGN KEY (colorId) REFERENCES Colors(id)
);

ALTER TABLE UsageDestinations
ADD CONSTRAINT UC_Name UNIQUE (name); -- Assicura che il nome sia univoco

-- Assicura che la chiave esterna sia univoca
ALTER TABLE UsageDestinations
ADD CONSTRAINT UC_ColorId UNIQUE (colorId);
