CREATE TABLE IF NOT EXISTS lm_PropertyTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    inserted_by_system BIT DEFAULT b'0'
);

INSERT INTO lm_PropertyTypes (name, notes, inserted_by_system) VALUES
('Edificio', 'Tipo di proprietà: Edificio', b'1'),
('Appartamento', 'Tipo di proprietà: Appartamento', b'1'),
('Ufficio', 'Tipo di proprietà: Ufficio', b'1'),
('Villa', 'Tipo di proprietà: Villa', b'1'),
('Magazzino', 'Tipo di proprietà: Magazzino', b'1'),
('Terreno', 'Tipo di proprietà: Terreno', b'1');
