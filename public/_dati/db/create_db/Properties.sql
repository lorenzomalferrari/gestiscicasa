CREATE TABLE IF NOT EXISTS lmgc_Properties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    note TEXT,
    price FLOAT NOT NULL,
    address VARCHAR(255) NOT NULL,
    IdCity INT NOT NULL,
    IdState INT NOT NULL,
    IdPropertyTypes INT NOT NULL,
    active BOOLEAN NOT NULL,
    notes TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP/*,
    CONSTRAINT fk_city FOREIGN KEY (IdCity) REFERENCES City(id),
    CONSTRAINT fk_state FOREIGN KEY (IdState) REFERENCES State(id),
    CONSTRAINT fk_PropertyTypes FOREIGN KEY (IdPropertyTypes) REFERENCES PropertyTypes(id),*/
    /*CONSTRAINT chk_price CHECK (price >= 0),
    CONSTRAINT chk_active CHECK (active IN (0, 1)),
    CONSTRAINT chk_dates CHECK (creationDate <= updateDate)*/
);
