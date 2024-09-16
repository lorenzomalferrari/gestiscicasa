CREATE TABLE lmgc_CrudTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(10) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lmgc_CrudTypes (code, name, description) VALUES
('C', 'CREATE', 'This operation is used to create new records in the system.'),
('R', 'READ', 'This operation is used to retrieve or read records from the system.'),
('U', 'UPDATE', 'This operation is used to modify existing records in the system.'),
('D', 'DELETE', 'This operation is used to remove records from the system.');
