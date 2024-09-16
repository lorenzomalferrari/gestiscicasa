CREATE TABLE IF NOT EXISTS lmgc_PhoneType (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL UNIQUE,   -- Tipo generale
    type_en VARCHAR(50) NULL,           -- Inglese
    type_it VARCHAR(50) NULL,           -- Italiano
    type_fr VARCHAR(50) NULL,           -- Francese
    type_es VARCHAR(50) NULL,           -- Spagnolo
    type_de VARCHAR(50) NULL            -- Tedesco
);

-- Inserimento di record di esempio
INSERT INTO lmgc_PhoneType (type, type_en, type_it, type_fr, type_es, type_de) VALUES
('Mobile', 'Mobile', 'Cellulare', 'Mobile', 'Móvil', 'Mobil'),
('Home', 'Home', 'Casa', 'Maison', 'Casa', 'Zuhause'),
('Work', 'Work', 'Lavoro', 'Travail', 'Trabajo', 'Arbeit');

CREATE TABLE IF NOT EXISTS lmgc_Phone (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(20) NOT NULL,
    type_id INT NOT NULL,
    FOREIGN KEY (type_id) REFERENCES lmgc_PhoneType(id)
);

CREATE TABLE IF NOT EXISTS lmgc_AddressType (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL UNIQUE,
    type_en VARCHAR(50) NULL,           -- Inglese
    type_it VARCHAR(50) NULL,           -- Italiano
    type_fr VARCHAR(50) NULL,           -- Francese
    type_es VARCHAR(50) NULL,           -- Spagnolo
    type_de VARCHAR(50) NULL            -- Tedesco
);

-- Inserimento di record di esempio
INSERT INTO lmgc_AddressType (type, type_en, type_it, type_fr, type_es, type_de) VALUES
('Home', 'Home', 'Casa', 'Maison', 'Casa', 'Zuhause'),
('Work', 'Work', 'Lavoro', 'Travail', 'Trabajo', 'Arbeit'),
('Billing', 'Billing', 'Fatturazione', 'Facturation', 'Facturación', 'Rechnung');

CREATE TABLE IF NOT EXISTS lmgc_Address (
    id INT AUTO_INCREMENT PRIMARY KEY,
    address_line1 VARCHAR(255) NOT NULL,
    address_line2 VARCHAR(255) NULL,
    city VARCHAR(255) NOT NULL,
    state VARCHAR(255) NOT NULL,
    postal_code VARCHAR(20) NOT NULL,
    country VARCHAR(255) NOT NULL,
    type_id INT NOT NULL,
    FOREIGN KEY (type_id) REFERENCES lmgc_AddressType(id)
);

CREATE TABLE IF NOT EXISTS lmgc_PeopleAddress (
    person_id INT NOT NULL,
    address_id INT NOT NULL,
    PRIMARY KEY (person_id, address_id),
    FOREIGN KEY (person_id) REFERENCES lmgc_People(id),
    FOREIGN KEY (address_id) REFERENCES lmgc_Address(id)
);

CREATE TABLE IF NOT EXISTS lmgc_PeoplePhone (
    person_id INT NOT NULL,
    phone_id INT NOT NULL,
    PRIMARY KEY (person_id, phone_id),
    FOREIGN KEY (person_id) REFERENCES lmgc_People(id),
    FOREIGN KEY (phone_id) REFERENCES lmgc_Phone(id)
);
