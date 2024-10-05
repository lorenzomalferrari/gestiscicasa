CREATE TABLE IF NOT EXISTS lmgc_Genders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gender VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO lmgc_Genders (gender) VALUES
('Maschio'),
('Femmina'),
('Altro');
