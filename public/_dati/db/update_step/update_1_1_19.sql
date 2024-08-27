DROP TABLE IF EXISTS lmgc_Genders;

CREATE TABLE lmgc_Genders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gender_it VARCHAR(50) NOT NULL,  -- Italiano
    gender_en VARCHAR(50),           -- Inglese
    gender_fr VARCHAR(50),           -- Francese
    gender_es VARCHAR(50),           -- Spagnolo
    gender_de VARCHAR(50),           -- Tedesco
    gender_pt VARCHAR(50),           -- Portoghese
    note VARCHAR(255) NULL,          -- Note opzionali, può essere NULL
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,         -- Data creazione
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP  -- Data modifica
);

-- Inserimento per "Maschio"
INSERT INTO lmgc_Genders (gender_it, gender_en, gender_fr, gender_es, gender_de, gender_pt)
VALUES
('Maschio', 'Male', 'Homme', 'Hombre', 'Männlich', 'Masculino');

-- Inserimento per "Femmina"
INSERT INTO lmgc_Genders (gender_it, gender_en, gender_fr, gender_es, gender_de, gender_pt)
VALUES
('Femmina', 'Female', 'Femme', 'Mujer', 'Weiblich', 'Feminino');

-- Inserimento per "Altro"
INSERT INTO lmgc_Genders (gender_it, gender_en, gender_fr, gender_es, gender_de, gender_pt)
VALUES
('Altro', 'Other', 'Autre', 'Otro', 'Andere', 'Outro');
