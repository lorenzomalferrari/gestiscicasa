CREATE TABLE IF NOT EXISTS lmgc_Category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    color_id INT,
    CONSTRAINT fk_Category_Color FOREIGN KEY (IdColor) REFERENCES lmgc_Colors(id)
);

INSERT INTO Category (name, description, notes, creation_date, update_date, IdColor)
VALUES ('Elettronica', 'Prodotti elettronici', 'Categoria principale per prodotti elettronici', NOW(), NOW(), 1);
