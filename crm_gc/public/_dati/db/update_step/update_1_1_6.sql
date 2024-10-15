CREATE TABLE IF NOT EXISTS lm_Category (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP/*,
    color_id INT,
    CONSTRAINT fk_Category_Color FOREIGN KEY (color_id) REFERENCES lm_Colors(id)*/
);

INSERT INTO Category (name, description, notes, creation_date, update_date)
VALUES ('Elettronica', 'Prodotti elettronici', 'Categoria principale per prodotti elettronici', NOW(), NOW());
