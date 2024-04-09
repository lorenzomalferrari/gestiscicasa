CREATE TABLE IF NOT EXISTS lmgc_Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
);

ALTER TABLE lmgc_Users
ADD CONSTRAINT UC_Username UNIQUE (username); -- Assicura che lo username sia univoco

ALTER TABLE lmgc_Users
ADD CONSTRAINT UC_Email UNIQUE (email); -- Assicura che l'email sia univoca
