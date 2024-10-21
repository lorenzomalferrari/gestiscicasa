-- Creazione della tabella lm_RoomTypess
CREATE TABLE IF NOT EXISTS lm_RoomTypess (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    notes TEXT,
    by_system BIT DEFAULT b'0',
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Aggiunta della constraint unica per la colonna name
ALTER TABLE lm_RoomTypess
ADD CONSTRAINT UC_Name UNIQUE (name);
