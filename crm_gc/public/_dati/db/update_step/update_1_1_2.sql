CREATE TABLE IF NOT EXISTS lmgc_UsageDestinations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(50),
    name VARCHAR(255) NOT NULL,
    description TEXT,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    color_id INT,
    FOREIGN KEY (color_id) REFERENCES lmgc_Colors(id)
);

ALTER TABLE lmgc_UsageDestinations
ADD CONSTRAINT UC_Name UNIQUE (name); -- Assicura che il nome sia univoco

-- Assicura che la chiave esterna sia univoca
ALTER TABLE lmgc_UsageDestinations
ADD CONSTRAINT UC_ColorId UNIQUE (color_id);
