CREATE TABLE Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price FLOAT NOT NULL,
    barcode VARCHAR(255) NOT NULL,
    IdBrand INT NOT NULL,
    IdCategory INT NOT NULL,
    note TEXT,
    creationDate DATE NOT NULL,
    updateData DATE NOT NULL,
    CONSTRAINT fk_brand FOREIGN KEY (IdBrand) REFERENCES Brand(id),
    CONSTRAINT fk_category FOREIGN KEY (IdCategory) REFERENCES Category(id),
    CONSTRAINT chk_price CHECK (price >= 0),
    CONSTRAINT chk_dates CHECK (creationDate <= updateData)
);
