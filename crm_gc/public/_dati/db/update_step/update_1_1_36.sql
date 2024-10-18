-- Creazione della tabella lm_RoomTypes
CREATE TABLE IF NOT EXISTS lm_RoomTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code CHAR(2) NOT NULL UNIQUE,
    name VARCHAR(255) NOT NULL,
    /*colore CHAR(7) NULL UNIQUE,*/
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP/*,
    CONSTRAINT chk_colore CHECK (colore REGEXP '^#[0-9A-Fa-f]{6}$')*/
);

-- Inserimento dei dati nella tabella lm_RoomTypes
INSERT INTO lm_RoomTypes (code, name, notes) VALUES
('CA','Camera',NULL),
('SA','Sala',NULL),
('CU','Cucina',NULL),
('BA','Bagno',NULL),
('BL','Balcone',NULL),
('CN','Cantina',NULL),
('GA','Garage',NULL),
('PI','Piscina',NULL),
('GI','Giardino',NULL),
('PA','Parcheggio',NULL),
('AG','Area agricola',NULL),
('ZE','Zona edificabile',NULL),
('ST','Stanza','stanza generica');

-- Creazione della tabella lm_Rooms
CREATE TABLE IF NOT EXISTS lm_Rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    property_id INT NOT NULL,
    room_type_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    code CHAR(2) NOT NULL UNIQUE,
    area DECIMAL(10, 2),
    /*colore CHAR(7) NULL UNIQUE,*/
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (property_id) REFERENCES lm_Properties(id),
    FOREIGN KEY (room_type_id) REFERENCES lm_RoomTypes(id)
);
