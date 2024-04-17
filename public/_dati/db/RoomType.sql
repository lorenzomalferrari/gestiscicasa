CREATE TABLE IF NOT EXISTS lmgc_RoomTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    note TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
);

ALTER TABLE lmgc_RoomTypes
ADD CONSTRAINT UC_Name UNIQUE (name); -- Assicura che il nome sia univoco

-- Assicura che la chiave esterna sia univoca
ALTER TABLE lmgc_RoomTypes
ADD CONSTRAINT UC_Name UNIQUE (name);