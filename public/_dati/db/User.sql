CREATE TABLE IF NOT EXISTS lmgc_Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE lmgc_Users
ADD CONSTRAINT UC_Username UNIQUE (username); -- Assicura che lo username sia univoco

ALTER TABLE lmgc_Users
ADD COLUMN token VARCHAR(255),
ADD COLUMN isActive bit DEFAULT b'0';

ALTER TABLE lmgc_Users DROP COLUMN email;
