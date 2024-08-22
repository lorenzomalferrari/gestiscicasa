-- Creazione della tabella lmgc_RoomTypes
CREATE TABLE IF NOT EXISTS lmgc_RoomTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    note TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Aggiunta della constraint unica per la colonna name
ALTER TABLE lmgc_RoomTypes
ADD CONSTRAINT UC_Name UNIQUE (name);
