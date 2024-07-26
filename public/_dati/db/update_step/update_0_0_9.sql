CREATE TABLE IF NOT EXISTS lmgc_Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price FLOAT NOT NULL,
    barcode VARCHAR(255) NOT NULL,
    IdBrand INT NOT NULL,
    IdCategory INT NOT NULL,
    note TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_brand FOREIGN KEY (IdBrand) REFERENCES lmgc_Brand(id),
    CONSTRAINT fk_category FOREIGN KEY (IdCategory) REFERENCES lmgc_Category(id)/*,
    CONSTRAINT chk_price CHECK (price >= 0),
    CONSTRAINT chk_dates CHECK (creationDate <= updateData)*/
);
