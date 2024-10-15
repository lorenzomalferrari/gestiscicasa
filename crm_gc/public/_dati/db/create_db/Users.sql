CREATE TABLE IF NOT EXISTS lm_Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE lm_Users
ADD CONSTRAINT UC_Username UNIQUE (username); -- Assicura che lo username sia univoco

ALTER TABLE lm_Users
ADD COLUMN token VARCHAR(255),
ADD COLUMN isActive bit DEFAULT b'0';

ALTER TABLE lm_Users DROP COLUMN email;
