-- Creazione della tabella lm_CrudTypes
CREATE TABLE lm_CrudTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento dei dati nella tabella lm_CrudTypes
INSERT INTO lm_CrudTypes (code, name, notes) VALUES
('C', 'CREATE', 'This operation is used to create new records in the system.'),
('R', 'READ', 'This operation is used to retrieve or read records from the system.'),
('U', 'UPDATE', 'This operation is used to modify existing records in the system.'),
('D', 'DELETE', 'This operation is used to remove records from the system.');
