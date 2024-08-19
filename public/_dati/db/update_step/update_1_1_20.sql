DROP TABLE lmgc_Cities;

CREATE TABLE IF NOT EXISTS lmgc_Cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE,
    code VARCHAR(10) UNIQUE,
    description TEXT DEFAULT NULL,
    notes TEXT DEFAULT NULL,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    modification_date DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    country_id INT,
    latitude DECIMAL(9, 6) DEFAULT NULL,
    longitude DECIMAL(9, 6) DEFAULT NULL,
    population BIGINT DEFAULT NULL,
    name_en VARCHAR(255) DEFAULT NULL,
    name_fr VARCHAR(255) DEFAULT NULL,
    name_de VARCHAR(255) DEFAULT NULL,
    name_es VARCHAR(255) DEFAULT NULL,
    name_pt VARCHAR(255) DEFAULT NULL,
    timezone VARCHAR(100) DEFAULT NULL,
    area DECIMAL(10, 2) DEFAULT NULL,
    elevation DECIMAL(7, 2) DEFAULT NULL,
    postal_code VARCHAR(20) DEFAULT NULL,
    economic_activity TEXT DEFAULT NULL,
    historical_significance TEXT DEFAULT NULL,
    FOREIGN KEY (country_id) REFERENCES lmgc_Countries(id)
);
