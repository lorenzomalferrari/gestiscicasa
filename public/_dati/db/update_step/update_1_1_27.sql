CREATE TABLE IF NOT EXISTS lmgc_Cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    code VARCHAR(10) UNIQUE, -- Codice della città, ad esempio il codice IATA
    notes TEXT,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    modification_date DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    country_id INT,
    latitude DECIMAL(9, 6),
    longitude DECIMAL(9, 6),
    population BIGINT,
    isCapital BOOLEAN DEFAULT FALSE, -- Indica se la città è la capitale
    FOREIGN KEY (country_id) REFERENCES lmgc_Countries(id)
);
/*
-- AFRICA

-- Inserimento capitali africane
INSERT INTO lmgc_Cities (name, code, notes, country_id, latitude, longitude, population, isCapital) VALUES
-- Algeria
('Algeri', 'ALG', 'Capitale dell\'Algeria', 1, 36.737232, 3.086472, 1977668, TRUE),
-- Angola
('Luanda', 'LAD', 'Capitale dell\'Angola', 2, -8.839989, 13.289437, 2530000, TRUE),
-- Benin
('Porto-Novo', 'PON', 'Capitale del Benin', 3, 6.4969, 2.6288, 264322, TRUE),
-- Botswana
('Gaborone', 'GBE', 'Capitale del Botswana', 4, -24.656, 25.908, 231626, TRUE),
-- Burkina Faso
('Ouagadougou', 'OUA', 'Capitale del Burkina Faso', 5, 12.3714, -1.5192, 2384620, TRUE),
-- Burundi
('Gitega', 'GID', 'Capitale del Burundi', 6, -3.4264, 29.9308, 45454, TRUE),
-- Cabo Verde
('Praia', 'RAI', 'Capitale di Cabo Verde', 7, 14.933, -23.5133, 131000, TRUE),
-- Camerun
('Yaoundé', 'YAO', 'Capitale del Camerun', 8, 3.848, 11.5021, 2860000, TRUE),
-- Repubblica Centrafricana
('Bangui', 'BGF', 'Capitale della Repubblica Centrafricana', 9, 4.3947, 18.5582, 889231, TRUE),
-- Chad
('N\'Djamena', 'NDJ', 'Capitale del Chad', 10, 12.6392, 14.0028, 1440000, TRUE),
-- Comore
('Moroni', 'YVA', 'Capitale delle Comore', 11, -11.7024, 43.2567, 60600, TRUE),
-- Congo (Brazzaville)
('Brazzaville', 'BZV', 'Capitale del Congo (Brazzaville)', 12, -4.2634, 15.2426, 1745000, TRUE),
-- Congo (Kinshasa)
('Kinshasa', 'FIH', 'Capitale del Congo (Kinshasa)', 13, -4.3218, 15.3154, 12000000, TRUE),
-- Costa d\'Avorio
('Yamoussoukro', 'YAO', 'Capitale della Costa d\'Avorio', 14, 6.8263, -1.2592, 322000, TRUE),
-- Djibouti
('Djibouti', 'JIB', 'Capitale di Djibouti', 15, 11.8251, 42.5903, 600000, TRUE),
-- Egitto
('Il Cairo', 'CAI', 'Capitale dell\'Egitto', 16, 30.0444, 31.2357, 20000000, TRUE),
-- Eritrea
('Asmara', 'ASM', 'Capitale dell\'Eritrea', 17, 15.3384, 38.9275, 963000, TRUE),
-- Eswatini
('Mbabane', 'MBN', 'Capitale dell\'Eswatini', 18, -26.3072, 31.1367, 94510, TRUE),
-- Etiopia
('Addis Abeba', 'ADD', 'Capitale dell\'Etiopia', 19, 9.145, 40.489673, 5000000, TRUE),
-- Gabon
('Libreville', 'LBV', 'Capitale del Gabon', 20, 0.3901, 9.4544, 703000, TRUE),
-- Gambia
('Banjul', 'BJL', 'Capitale del Gambia', 21, 13.4549, -16.5780, 34500, TRUE),
-- Ghana
('Accra', 'ACC', 'Capitale del Ghana', 22, 5.6037, -0.1870, 2284000, TRUE),
-- Guinea
('Conakry', 'CKY', 'Capitale della Guinea', 23, 9.6412, -13.5784, 2000000, TRUE),
-- Guinea-Bissau
('Bissau', 'BIS', 'Capitale della Guinea-Bissau', 24, 11.8814, -15.6170, 491000, TRUE),
-- Liberia
('Monrovia', 'MLW', 'Capitale della Liberia', 26, 6.3000, -10.8000, 1200000, TRUE),
-- Libia
('Tripoli', 'TIP', 'Capitale della Libia', 27, 32.8872, 13.1914, 1150000, TRUE),
-- Madagascar
('Antananarivo', 'TNR', 'Capitale del Madagascar', 28, -18.8792, 47.5079, 1800000, TRUE),
-- Malawi
('Lilongwe', 'LLW', 'Capitale del Malawi', 29, -13.9626, 33.7741, 1300000, TRUE),
-- Mali
('Bamako', 'BKO', 'Capitale del Mali', 30, 12.6392, -8.0029, 2290000, TRUE),
-- Mauritania
('Nouakchott', 'NKC', 'Capitale della Mauritania', 31, 18.0858, -15.978, 1110000, TRUE),
-- Mauritius
('Port Louis', 'PLS', 'Capitale di Mauritius', 32, -20.1667, 57.5000, 148000, TRUE),
-- Marocco
('Rabat', 'RBA', 'Capitale del Marocco', 33, 34.020882, -6.841650, 577000, TRUE),
-- Mozambico
('Maputo', 'MPM', 'Capitale del Mozambico', 34, -25.9667, 32.5833, 1218000, TRUE),
-- Niger
('Niamey', 'NIM', 'Capitale del Niger', 35, 13.5128, 2.1128, 1280000, TRUE),
-- Nigeria
('Abuja', 'ABV', 'Capitale della Nigeria', 36, 9.0578, 7.49508, 1450000, TRUE),
-- Ruanda
('Kigali', 'KGL', 'Capitale del Ruanda', 37, -1.9441, 30.0619, 1360000, TRUE),
-- Sao Tome e Principe
('São Tomé', 'TMS', 'Capitale di São Tomé e Principe', 38, 0.3360, 6.7322, 80000, TRUE),
-- Senegal
('Dakar', 'DKR', 'Capitale del Senegal', 39, 14.6928, -17.4467, 1140000, TRUE),
-- Seychelles
('Victoria', 'SEZ', 'Capitale delle Seychelles', 40, -4.6167, 55.4500, 25900, TRUE),
-- Sierra Leone
('Freetown', 'FNA', 'Capitale della Sierra Leone', 41, 8.4657, -13.2317, 1180000, TRUE),
-- Somalia
('Mogadiscio', 'MGQ', 'Capitale della Somalia', 42, 2.0469, 45.3182, 2200000, TRUE),
-- South Africa
('Pretoria', 'PRY', 'Capitale amministrativa del Sudafrica', 43, -25.7461, 28.1881, 741000, TRUE),
('Città del Capo', 'CPT', 'Capitale legislativa del Sudafrica', 43, -33.9249, 18.4241, 433688, TRUE),
-- South Sudan
('Juba', 'JUB', 'Capitale del Sud Sudan', 44, 4.8517, 31.5820, 528000, TRUE),
-- Sudan
('Khartoum', 'KRT', 'Capitale del Sudan', 45, 15.5000, 32.5500, 1700000, TRUE),
-- Togo
('Lomé', 'LFW', 'Capitale del Togo', 46, 6.1725, 1.2310, 237000, TRUE),
-- Tunisia
('Tunisi', 'TUN', 'Capitale della Tunisia', 47, 36.8065, 10.1815, 700000, TRUE),
-- Uganda
('Kampala', 'EBB', 'Capitale dell\'Uganda', 48, 0.3476, 32.5825, 1580000, TRUE),
-- Zambia
('Lusaka', 'LUN', 'Capitale dello Zambia', 49, -15.3875, 28.3228, 2200000, TRUE),
-- Zimbabwe
('Harare', 'HRE', 'Capitale dello Zimbabwe', 50, -17.8292, 31.0522, 1560000, TRUE);
*/
