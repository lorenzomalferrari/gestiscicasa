CREATE TABLE lmgc_CategoryTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(2) UNIQUE NULL,
    name VARCHAR(255) NOT NULL,
    note TEXT NULL,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE lmgc_Categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    categoryTypeId INT NOT NULL,
    code VARCHAR(2) UNIQUE NULL,
    name VARCHAR(255) NOT NULL,
    note TEXT NULL,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (categoryTypeId) REFERENCES lmgc_CategoryTypes(id)
);
