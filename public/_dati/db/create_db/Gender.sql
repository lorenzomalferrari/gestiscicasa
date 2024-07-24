CREATE TABLE IF NOT EXISTS lmgc_Gender (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gender VARCHAR(50) NOT NULL UNIQUE,
    gender_en VARCHAR(50) NOT NULL,
    gender_fr VARCHAR(50) NOT NULL,
    gender_es VARCHAR(50) NOT NULL,
    gender_de VARCHAR(50) NOT NULL,
    gender_pt VARCHAR(50) NOT NULL
);

INSERT INTO lmgc_Gender (gender, gender_en, gender_fr, gender_es, gender_de, gender_pt) VALUES
('Maschio', 'Male', 'Homme', 'Hombre', 'Männlich', 'Masculino'),
('Femmina', 'Female', 'Femme', 'Mujer', 'Weiblich', 'Feminino'),
('Altro', 'Other', 'Autre', 'Otro', 'Andere', 'Outro');
