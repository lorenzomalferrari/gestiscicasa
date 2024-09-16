CREATE TABLE IF NOT EXISTS lmgc_Genders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gender VARCHAR(50) NOT NULL UNIQUE
);

/*
INSERT INTO lmgc_Genders (gender, gender_en, gender_fr, gender_es, gender_de, gender_pt) VALUES
('Maschio', 'Male', 'Homme', 'Hombre', 'Männlich', 'Masculino'),
('Femmina', 'Female', 'Femme', 'Mujer', 'Weiblich', 'Feminino'),
('Altro', 'Other', 'Autre', 'Otro', 'Andere', 'Outro');
*/
