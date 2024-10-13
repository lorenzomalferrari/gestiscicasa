-- Creazione della tabella lmgc_RoomTypess
CREATE TABLE IF NOT EXISTS lmgc_RoomTypess (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Aggiunta della constraint unica per la colonna name
ALTER TABLE lmgc_RoomTypess
ADD CONSTRAINT UC_Name UNIQUE (name);
