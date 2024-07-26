CREATE TABLE IF NOT EXISTS lmgc_Category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    notes TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    IdColor INT,
    CONSTRAINT fk_Category_Color FOREIGN KEY (IdColor) REFERENCES lmgc_Colors(id)/*,
    CONSTRAINT chk_name_length CHECK (CHAR_LENGTH(name) <= 255),
    CONSTRAINT chk_description_length CHECK (CHAR_LENGTH(description) <= 65535),
    CONSTRAINT chk_notes_length CHECK (CHAR_LENGTH(notes) <= 65535)*/
);

INSERT INTO Category (name, description, notes, creationDate, updateDate, IdColor)
VALUES ('Elettronica', 'Prodotti elettronici', 'Categoria principale per prodotti elettronici', NOW(), NOW(), 1);
