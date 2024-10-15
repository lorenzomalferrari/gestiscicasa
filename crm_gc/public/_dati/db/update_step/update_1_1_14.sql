CREATE TABLE IF NOT EXISTS lm_PhoneType (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL UNIQUE,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento di record di esempio
INSERT INTO lm_PhoneType (type) VALUES
('Mobile'),
('Home'),
('Work');

CREATE TABLE IF NOT EXISTS lm_Phone (
    id INT AUTO_INCREMENT PRIMARY KEY,
    phone_number VARCHAR(20) NOT NULL,
    type_id INT NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    FOREIGN KEY (type_id) REFERENCES lm_PhoneType(id)
);

CREATE TABLE IF NOT EXISTS lm_AddressType (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(50) NOT NULL UNIQUE,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento di record di esempio
INSERT INTO lm_AddressType (type) VALUES
('Home'),
('Work'),
('Billing');

CREATE TABLE IF NOT EXISTS lm_Address (
    id INT AUTO_INCREMENT PRIMARY KEY,
    address_line1 VARCHAR(255) NOT NULL,
    address_line2 VARCHAR(255) NULL,
    city_id VARCHAR(255) NOT NULL,
    state_id VARCHAR(255) NOT NULL,
    postal_code VARCHAR(20) NOT NULL,
    country_id VARCHAR(255) NOT NULL,
    type_id INT NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    FOREIGN KEY (type_id) REFERENCES lm_AddressType(id)
);

CREATE TABLE IF NOT EXISTS lm_PeopleAddress (
    person_id INT NOT NULL,
    address_id INT NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    PRIMARY KEY (person_id, address_id),
    FOREIGN KEY (person_id) REFERENCES lm_People(id),
    FOREIGN KEY (address_id) REFERENCES lm_Address(id)
);

CREATE TABLE IF NOT EXISTS lm_PeoplePhone (
    person_id INT NOT NULL,
    phone_id INT NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    PRIMARY KEY (person_id, phone_id),
    FOREIGN KEY (person_id) REFERENCES lm_People(id),
    FOREIGN KEY (phone_id) REFERENCES lm_Phone(id)
);
