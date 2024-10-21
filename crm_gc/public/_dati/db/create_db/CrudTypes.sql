-- Creazione della tabella lm_CrudTypes
CREATE TABLE IF NOT EXISTS lm_CrudTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(1) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    notes TEXT,
    action VARCHAR(50),
    value INT(4),
    by_system BIT DEFAULT 0,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Inserimento dei dati nella tabella lm_CrudTypes
INSERT INTO lm_CrudTypes (code, name, notes, action, value, by_system) VALUES
('C', 'CREATE', 'This operation is used to create new records in the system.','INSERT',1,1),
('R', 'READ', 'This operation is used to retrieve or read records from the system.','SELECT',2,1),
('U', 'UPDATE', 'This operation is used to modify existing records in the system.','UPDATE',3,1),
('D', 'DELETE', 'This operation is used to remove records from the system.','DELETE',4,1);
