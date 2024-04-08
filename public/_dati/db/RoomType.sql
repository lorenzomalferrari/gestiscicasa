CREATE TABLE RoomTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    note TEXT
);

ALTER TABLE RoomTypes
ADD CONSTRAINT UC_Name UNIQUE (name); -- Assicura che il nome sia univoco

-- Assicura che la chiave esterna sia univoca
ALTER TABLE RoomTypes
ADD CONSTRAINT UC_Name UNIQUE (name);
