CREATE TABLE lmgc_RoomTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codice CHAR(2) NOT NULL UNIQUE,
    nome VARCHAR(255) NOT NULL,
    colore CHAR(7) NULL UNIQUE,
    note TEXT,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT chk_colore CHECK (colore REGEXP '^#[0-9A-Fa-f]{6}$')
)

INSET INTO lmgc_RoomTypes (codice, nome, note)
VALUES
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
    ('ST','Stanza','stanza generica'),

CREATE TABLE lmgc_Rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    property_id INT NOT NULL,
    room_type_id INT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    codice CHAR(2) NOT NULL UNIQUE,
    area DECIMAL(10, 2),
    colore CHAR(7) NULL UNIQUE,
    notes TEXT,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (property_id) REFERENCES lmgc_Properties(id),
    FOREIGN KEY (room_type_id) REFERENCES lmgc_RoomTypes(id)
);
