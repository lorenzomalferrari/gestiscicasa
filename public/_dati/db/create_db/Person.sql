CREATE TABLE IF NOT EXISTS lmgc_People (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    birthdate DATE NOT NULL,
    city INT NULL,
    state INT NULL,
    nationality INT NULL,
    description VARCHAR(255) NULL,
    idUser INT NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE lmgc_People
ADD COLUMN email VARCHAR(255);

ALTER TABLE lmgc_People
ADD CONSTRAINT UC_Email UNIQUE (email); -- Assicura che l'email sia univoca
