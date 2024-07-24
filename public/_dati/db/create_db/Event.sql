CREATE TABLE IF NOT EXISTS lmgc_Event (
    id INT AUTO_INCREMENT PRIMARY KEY,
    action VARCHAR(50) NOT NULL,
    notes VARCHAR(255),
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO Event (action, notes) VALUES ('CREATE', 'CREATE in SQL');
INSERT INTO Event (action, notes) VALUES ('READ', 'SELECT in SQL');
INSERT INTO Event (action, notes) VALUES ('UPDATE', 'UPDATE in SQL');
INSERT INTO Event (action, notes) VALUES ('DELETE', 'DELETE in SQL');