CREATE TABLE IF NOT EXISTS lm_PhoneTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL UNIQUE,
    by_system BIT DEFAULT b'0',
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento di record di esempio
INSERT INTO lm_PhoneTypes ( type, by_system ) VALUES
('Cellulare',1),
('Casa',1),
('Ufficio',1),
('Fax',1);

CREATE TABLE IF NOT EXISTS lm_Phones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(20) NOT NULL,
    type_id INT NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    FOREIGN KEY (type_id) REFERENCES lm_PhoneTypes(id)
);

CREATE TABLE IF NOT EXISTS lm_AddressTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL UNIQUE,
    by_system BIT DEFAULT b'0',
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento di record di esempio
INSERT INTO lm_AddressTypes ( type, by_system ) VALUES
('Casa',1),
('Ufficio',1);

CREATE TABLE IF NOT EXISTS lm_Addresses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    address_line1 VARCHAR(255) NOT NULL,
    address_line2 VARCHAR(255) NULL,
    city_id VARCHAR(255) NOT NULL,
    state_id VARCHAR(255) NOT NULL,
    postal_code VARCHAR(20) NOT NULL,
    country_id VARCHAR(255) NOT NULL,
    type_id INT NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    FOREIGN KEY (type_id) REFERENCES lm_AddressTypes(id)
);

CREATE TABLE IF NOT EXISTS lm_PeopleAddress (
    person_id INT NOT NULL,
    address_id INT NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    PRIMARY KEY (person_id, address_id),
    FOREIGN KEY (person_id) REFERENCES lm_People(id),
    FOREIGN KEY (address_id) REFERENCES lm_Addresses(id)
);

CREATE TABLE IF NOT EXISTS lm_PeoplePhone (
    person_id INT NOT NULL,
    phone_id INT NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    PRIMARY KEY (person_id, phone_id),
    FOREIGN KEY (person_id) REFERENCES lm_People(id),
    FOREIGN KEY (phone_id) REFERENCES lm_Phones(id)
);
