CREATE TABLE IndirizziIpBloccati (
    id INT AUTO_INCREMENT PRIMARY KEY,
    indirizzo_ip VARCHAR(45) NOT NULL,
    note TEXT,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_modifica TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);