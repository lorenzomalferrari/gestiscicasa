CREATE TABLE IF NOT EXISTS lmgc_Cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE,
    code VARCHAR(10) UNIQUE,
    description TEXT,
    notes TEXT,
    creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    modification_date DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    country_id INT,
    latitude DECIMAL(9, 6),
    longitude DECIMAL(9, 6),
    population BIGINT,
    name_italian VARCHAR(255) UNIQUE,
    name_english VARCHAR(255) UNIQUE,
    name_french VARCHAR(255) UNIQUE,
    name_german VARCHAR(255) UNIQUE,
    name_spanish VARCHAR(255) UNIQUE,
    name_portuguese VARCHAR(255) UNIQUE,
    FOREIGN KEY (country_id) REFERENCES lmgc_Countries(id)
);

-- Africa
INSERT INTO lmgc_Cities (name, code, description, notes, country_id, latitude, longitude, population, name_italian, name_english, name_french, name_german, name_spanish, name_portuguese) VALUES
('Abuja', 'ABJ', 'Capitale della Nigeria.', 'Note su Abuja', 1, 9.0579, 7.49508, 3600000, 'Abuja', 'Abuja', 'Abuja', 'Abuja', 'Abuja', 'Abuja'),
('Accra', 'ACC', 'Capitale del Ghana.', 'Note su Accra', 2, 5.6037, -0.1870, 2270000, 'Accra', 'Accra', 'Accra', 'Accra', 'Accra', 'Accra'),
('Algiers', 'ALG', 'Capitale dell\'Algeria.', 'Note su Algiers', 3, 36.737232, 3.086472, 1977665, 'Algeri', 'Algiers', 'Alger', 'Algier', 'Argel', 'Argel'),
('Asmara', 'ASM', 'Capitale dell\'Eritrea.', 'Note su Asmara', 4, 15.3384, 38.9310, 814000, 'Asmara', 'Asmara', 'Asmara', 'Asmara', 'Asmara', 'Asmara'),
('Banjul', 'BAN', 'Capitale del Gambia.', 'Note su Banjul', 5, 13.4549, -16.5790, 340000, 'Banjul', 'Banjul', 'Banjul', 'Banjul', 'Banjul', 'Banjul'),
('Bamako', 'BKO', 'Capitale del Mali.', 'Note su Bamako', 6, 12.6392, -8.0029, 2300000, 'Bamako', 'Bamako', 'Bamako', 'Bamako', 'Bamako', 'Bamako'),
('Bangui', 'BGF', 'Capitale della Repubblica Centrafricana.', 'Note su Bangui', 7, 4.3947, 18.5582, 889000, 'Bangui', 'Bangui', 'Bangui', 'Bangui', 'Bangui', 'Bangui'),
('Banjul', 'BAN', 'Capitale del Gambia.', 'Note su Banjul', 8, 13.4549, -16.5790, 340000, 'Banjul', 'Banjul', 'Banjul', 'Banjul', 'Banjul', 'Banjul'),
('Brazzaville', 'BRA', 'Capitale della Repubblica del Congo.', 'Note su Brazzaville', 9, -4.2634, 15.2429, 1740000, 'Brazzaville', 'Brazzaville', 'Brazzaville', 'Brazzaville', 'Brazzaville', 'Brazzaville'),
('Bujumbura', 'BUJ', 'Capitale del Burundi.', 'Note su Bujumbura', 10, -3.3822, 29.3617, 330000, 'Bujumbura', 'Bujumbura', 'Bujumbura', 'Bujumbura', 'Bujumbura', 'Bujumbura'),
('Cairo', 'CAI', 'Capitale dell\'Egitto.', 'Note su Cairo', 11, 30.0444, 31.2357, 9270000, 'Il Cairo', 'Cairo', 'Le Caire', 'Kairo', 'El Cairo', 'Cairo'),
('Cotonou', 'COO', 'Capitale economica del Benin.', 'Note su Cotonou', 12, 6.3700, 2.3900, 679000, 'Cotonou', 'Cotonou', 'Cotonou', 'Cotonou', 'Cotonou', 'Cotonou'),
('Dakar', 'DAK', 'Capitale del Senegal.', 'Note su Dakar', 13, 14.6928, -17.4467, 1380000, 'Dakar', 'Dakar', 'Dakar', 'Dakar', 'Dakar', 'Dakar'),
('Djibouti', 'DIJ', 'Capitale di Gibuti.', 'Note su Djibouti', 14, 11.8251, 42.5903, 600000, 'Djibouti', 'Djibouti', 'Djibouti', 'Dschibuti', 'Yibuti', 'Jibuti'),
('Dodoma', 'DOD', 'Capitale della Tanzania.', 'Note su Dodoma', 15, -6.7924, 39.2083, 411000, 'Dodoma', 'Dodoma', 'Dodoma', 'Dodoma', 'Dodoma', 'Dodoma'),
('Freetown', 'FNA', 'Capitale della Sierra Leone.', 'Note su Freetown', 16, 8.4657, -13.2317, 1090000, 'Freetown', 'Freetown', 'Freetown', 'Freetown', 'Freetown', 'Freetown'),
('Gaborone', 'GAB', 'Capitale del Botswana.', 'Note su Gaborone', 17, -24.6465, 25.9067, 231000, 'Gaborone', 'Gaborone', 'Gaborone', 'Gaborone', 'Gaborone', 'Gaborone'),
('Gitega', 'GIT', 'Capitale del Burundi.', 'Note su Gitega', 18, -3.4254, 29.9260, 502000, 'Gitega', 'Gitega', 'Gitega', 'Gitega', 'Gitega', 'Gitega'),
('Hargeisa', 'HGS', 'Capitale del Somaliland.', 'Note su Hargeisa', 19, 9.5526, 44.0734, 281000, 'Hargeisa', 'Hargeisa', 'Hargeisa', 'Hargeisa', 'Hargeisa', 'Hargeisa'),
('Juba', 'JUB', 'Capitale del Sud Sudan.', 'Note su Juba', 20, 4.8517, 31.5820, 507000, 'Juba', 'Juba', 'Juba', 'Juba', 'Juba', 'Juba'),
('Kampala', 'KLA', 'Capitale dell\'Uganda.', 'Note su Kampala', 21, 0.3476, 32.5825, 1700000, 'Kampala', 'Kampala', 'Kampala', 'Kampala', 'Kampala', 'Kampala'),
('Khartoum', 'KRT', 'Capitale del Sudan.', 'Note su Khartoum', 22, 15.5000, 32.5500, 5000000, 'Cartum', 'Khartoum', 'Khartoum', 'Khartum', 'Jartum', 'Cartum'),
('Kinshasa', 'KIN', 'Capitale della Repubblica Democratica del Congo.', 'Note su Kinshasa', 23, -4.3224, 15.3114, 8500000, 'Kinshasa', 'Kinshasa', 'Kinshasa', 'Kinshasa', 'Kinshasa', 'Kinshasa'),
('Lagos', 'LAG', 'Capitale commerciale della Nigeria.', 'Note su Lagos', 24, 6.5244, 3.3792, 2190000, 'Lagos', 'Lagos', 'Lagos', 'Lagos', 'Lagos', 'Lagos'),
('Libreville', 'LIB', 'Capitale del Gabon.', 'Note su Libreville', 25, 0.3901, 9.4544, 703000, 'Libreville', 'Libreville', 'Libreville', 'Libreville', 'Libreville', 'Libreville'),
('Lomé', 'LOM', 'Capitale del Togo.', 'Note su Lomé', 26, 6.1725, 1.2314, 737000, 'Lomé', 'Lomé', 'Lomé', 'Lomé', 'Lomé', 'Lomé'),
('Luanda', 'LUA', 'Capitale dell\'Angola.', 'Note su Luanda', 27, -8.8390, 13.2894, 2775000, 'Luanda', 'Luanda', 'Luanda', 'Luanda', 'Luanda', 'Luanda'),
('Lusaka', 'LUS', 'Capitale dello Zambia.', 'Note su Lusaka', 28, -15.3875, 28.3228, 2000000, 'Lusaka', 'Lusaka', 'Lusaka', 'Lusaka', 'Lusaka', 'Lusaka'),
('Malabo', 'MAL', 'Capitale dell\'Equatore Guinea.', 'Note su Malabo', 29, 3.7500, 8.7833, 297000, 'Malabo', 'Malabo', 'Malabo', 'Malabo', 'Malabo', 'Malabo'),
('Maputo', 'MPM', 'Capitale del Mozambico.', 'Note su Maputo', 30, -25.9700, 32.5892, 1120000, 'Maputo', 'Maputo', 'Maputo', 'Maputo', 'Maputo', 'Maputo'),
('Maseru', 'MAS', 'Capitale del Lesotho.', 'Note su Maseru', 31, -29.3103, 27.4869, 280000, 'Maseru', 'Maseru', 'Maseru', 'Maseru', 'Maseru', 'Maseru'),
('Mogadishu', 'MOG', 'Capitale della Somalia.', 'Note su Mogadishu', 32, 2.0469, 45.3182, 2280000, 'Mogadiscio', 'Mogadishu', 'Mogadiscio', 'Mogadischu', 'Mogadiscio', 'Mogadíscio'),
('Monrovia', 'MON', 'Capitale della Liberia.', 'Note su Monrovia', 33, 6.3000, -10.8000, 1010000, 'Monrovia', 'Monrovia', 'Monrovia', 'Monrovia', 'Monrovia', 'Monróvia'),
('Moroni', 'MOR', 'Capitale delle Comore.', 'Note su Moroni', 34, -11.7016, 43.2560, 32000, 'Moroni', 'Moroni', 'Moroni', 'Moroni', 'Moroni', 'Moroni'),
('Nairobi', 'NAI', 'Capitale del Kenya.', 'Note su Nairobi', 35, -1.2864, 36.8172, 4390000, 'Nairobi', 'Nairobi', 'Nairobi', 'Nairobi', 'Nairobi', 'Nairóbi'),
('Ndjamena', 'NDJ', 'Capitale del Ciad.', 'Note su Ndjamena', 36, 12.6392, 14.0167, 1440000, 'N'Djamena', 'Ndjamena', 'N'Djamena', 'N'Djamena', 'Ndjamena', 'Ndjamena'),
('Niamey', 'NIM', 'Capitale del Niger.', 'Note su Niamey', 37, 13.5128, 2.1128, 1200000, 'Niamey', 'Niamey', 'Niamey', 'Niamey', 'Niamey', 'Niamey'),
('Nairobi', 'NAI', 'Capitale del Kenya.', 'Note su Nairobi', 38, -1.2864, 36.8172, 4390000, 'Nairobi', 'Nairobi', 'Nairobi', 'Nairobi', 'Nairobi', 'Nairóbi'),
('Ouagadougou', 'OUA', 'Capitale del Burkina Faso.', 'Note su Ouagadougou', 39, 12.3714, -1.5191, 2370000, 'Ouagadougou', 'Ouagadougou', 'Ouagadougou', 'Ouagadougou', 'Ouagadougou', 'Ouagadougou'),
('Porto-Novo', 'PON', 'Capitale ufficiale del Benin.', 'Note su Porto-Novo', 40, 6.4971, 2.6280, 264000, 'Porto-Novo', 'Porto-Novo', 'Porto-Novo', 'Porto-Novo', 'Porto-Novo', 'Porto-Novo'),
('Rabat', 'RAB', 'Capitale del Marocco.', 'Note su Rabat', 41, 34.0209, -6.84165, 577000, 'Rabat', 'Rabat', 'Rabat', 'Rabat', 'Rabat', 'Rabat'),
('Saint-Denis', 'SDN', 'Capitale della Riunione.', 'Note su Saint-Denis', 42, -20.8788, 55.4489, 147000, 'Saint-Denis', 'Saint-Denis', 'Saint-Denis', 'Saint-Denis', 'Saint-Denis', 'Saint-Denis'),
('Sao Tome', 'STO', 'Capitale di Sao Tome e Principe.', 'Note su Sao Tome', 43, 0.3365, 6.7333, 25000, 'Sao Tome', 'Sao Tome', 'Sao Tomé', 'São Tomé', 'Santo Tomé', 'São Tomé'),
('Tripoli', 'TIP', 'Capitale della Libia.', 'Note su Tripoli', 44, 32.8872, 13.1910, 1150000, 'Tripoli', 'Tripoli', 'Tripoli', 'Tripolis', 'Trípoli', 'Trípoli'),
('Tunis', 'TUN', 'Capitale della Tunisia.', 'Note su Tunis', 45, 36.8065, 10.1815, 748000, 'Tunisi', 'Tunis', 'Tunis', 'Tunis', 'Túnez', 'Túnis'),
('Victoria', 'VIC', 'Capitale delle Seychelles.', 'Note su Victoria', 46, -4.6167, 55.4500, 26000, 'Victoria', 'Victoria', 'Victoria', 'Victoria', 'Victoria', 'Victoria'),
('Windhoek', 'WDH', 'Capitale della Namibia.', 'Note su Windhoek', 47, -22.5597, 17.0832, 431000, 'Windhoek', 'Windhoek', 'Windhoek', 'Windhoek', 'Windhoek', 'Windhoek');

-- Asia
INSERT INTO lmgc_Cities (name, code, description, notes, country_id, latitude, longitude, population, name_italian, name_english, name_french, name_german, name_spanish, name_portuguese) VALUES
('Abu Dhabi', 'ADH', 'Capitale degli Emirati Arabi Uniti.', 'Note su Abu Dhabi', 1, 24.4539, 54.3773, 1250000, 'Abu Dhabi', 'Abu Dhabi', 'Abou Dabi', 'Abu Dhabi', 'Abu Dabi', 'Abu Dhabi'),
('Amman', 'AMM', 'Capitale della Giordania.', 'Note su Amman', 2, 31.9454, 35.9284, 1250000, 'Amman', 'Amman', 'Amman', 'Amman', 'Amán', 'Amã'),
('Ankara', 'ANK', 'Capitale della Turchia.', 'Note su Ankara', 3, 39.9334, 32.8597, 5500000, 'Ankara', 'Ankara', 'Ankara', 'Ankara', 'Ankara', 'Ancara'),
('Astana', 'AST', 'Capitale del Kazakistan.', 'Note su Astana', 4, 51.1694, 71.4491, 1130000, 'Astana', 'Astana', 'Astana', 'Astana', 'Astana', 'Astana'),
('Bangkok', 'BKK', 'Capitale della Thailandia.', 'Note su Bangkok', 5, 13.7563, 100.5018, 8300000, 'Bangkok', 'Bangkok', 'Bangkok', 'Bangkok', 'Bangkok', 'Bangkok'),
('Beijing', 'BEI', 'Capitale della Cina.', 'Note su Beijing', 6, 39.9042, 116.4074, 21500000, 'Pechino', 'Beijing', 'Pékin', 'Peking', 'Pekín', 'Pequim'),
('Bishkek', 'BIS', 'Capitale del Kirghizistan.', 'Note su Bishkek', 7, 42.8746, 74.5698, 1020000, 'Biskek', 'Bishkek', 'Bichkek', 'Bischkek', 'Biskek', 'Biskek'),
('Brunei', 'BRU', 'Capitale del Brunei.', 'Note su Brunei', 8, 4.5353, 114.7277, 100000, 'Bandar Seri Begawan', 'Bandar Seri Begawan', 'Bandar Seri Begawan', 'Bandar Seri Begawan', 'Bandar Seri Begawan', 'Bandar Seri Begawan'),
('Colombo', 'COL', 'Capitale commerciale dello Sri Lanka.', 'Note su Colombo', 9, 6.9271, 79.9585, 647000, 'Colombo', 'Colombo', 'Colombo', 'Colombo', 'Colombo', 'Colombo'),
('Dhaka', 'DHA', 'Capitale del Bangladesh.', 'Note su Dhaka', 10, 23.8103, 90.4125, 8900000, 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Dhaka', 'Daca'),
('Doha', 'DOH', 'Capitale del Qatar.', 'Note su Doha', 11, 25.276987, 51.520008, 1440000, 'Doha', 'Doha', 'Doha', 'Doha', 'Doha', 'Doha'),
('Hanoi', 'HAN', 'Capitale del Vietnam.', 'Note su Hanoi', 12, 21.0285, 105.8542, 8000000, 'Hanoi', 'Hanoi', 'Hanoï', 'Hanoi', 'Hanói', 'Hanói'),
('Istanbul', 'IST', 'Capitale culturale della Turchia.', 'Note su Istanbul', 13, 41.0082, 28.9784, 15460000, 'Istanbul', 'Istanbul', 'Istanbul', 'Istanbul', 'Estambul', 'Istambul'),
('Jakarta', 'JAK', 'Capitale dell\'Indonesia.', 'Note su Jakarta', 14, -6.2088, 106.8456, 10500000, 'Giakarta', 'Jakarta', 'Jakarta', 'Jakarta', 'Yakarta', 'Jacarta'),
('Jerusalem', 'JER', 'Capitale di Israele.', 'Note su Jerusalem', 15, 31.7683, 35.2137, 919000, 'Gerusalemme', 'Jerusalem', 'Jérusalem', 'Jerusalem', 'Jerusalén', 'Jerusalém'),
('Kabul', 'KAB', 'Capitale dell\'Afghanistan.', 'Note su Kabul', 16, 34.5553, 69.2075, 4570000, 'Kabul', 'Kabul', 'Kaboul', 'Kabul', 'Kabul', 'Cabul'),
('Kuala Lumpur', 'KUL', 'Capitale della Malesia.', 'Note su Kuala Lumpur', 17, 3.139, 101.6869, 1790000, 'Kuala Lumpur', 'Kuala Lumpur', 'Kuala Lumpur', 'Kuala Lumpur', 'Kuala Lumpur', 'Kuala Lumpur'),
('Kuwait City', 'KWI', 'Capitale del Kuwait.', 'Note su Kuwait City', 18, 29.3759, 47.9774, 60,000, 'Kuwait City', 'Kuwait City', 'Kuwait', 'Kuwait-Stadt', 'Ciudad de Kuwait', 'Cidade do Kuwait'),
('Manila', 'MAN', 'Capitale delle Filippine.', 'Note su Manila', 19, 14.5995, 120.9842, 1392340, 'Manila', 'Manila', 'Manille', 'Manila', 'Manila', 'Manila'),
('Muscat', 'MCT', 'Capitale dell\'Oman.', 'Note su Muscat', 20, 23.6139, 58.5922, 150000, 'Mascate', 'Muscat', 'Mascate', 'Muscat', 'Mascate', 'Mascate'),
('New Delhi', 'DEL', 'Capitale dell\'India.', 'Note su New Delhi', 21, 28.6139, 77.2090, 31000000, 'Nuova Delhi', 'New Delhi', 'Nouvelle-Delhi', 'Neu-Delhi', 'Nueva Delhi', 'Nova Delhi'),
('Nicosia', 'NIC', 'Capitale di Cipro.', 'Note su Nicosia', 22, 35.1667, 33.3667, 55000, 'Nicosia', 'Nicosia', 'Nicosie', 'Nikosia', 'Nicosia', 'Nicósia'),
('Osaka', 'OSA', 'Capitale dell\'Osaka Prefecture in Giappone.', 'Note su Osaka', 23, 34.6937, 135.5023, 2700000, 'Osaka', 'Osaka', 'Osaka', 'Osaka', 'Osaka', 'Osaka'),
('Pyongyang', 'PYG', 'Capitale della Corea del Nord.', 'Note su Pyongyang', 24, 39.0392, 125.7625, 2910000, 'Pyongyang', 'Pyongyang', 'Pyongyang', 'Pjöngjang', 'Pionyang', 'Pyongyang'),
('Riyadh', 'RIY', 'Capitale dell\'Arabia Saudita.', 'Note su Riyadh', 25, 24.7136, 46.6753, 7300000, 'Riyad', 'Riyadh', 'Riyad', 'Riad', 'Riad', 'Riade'),
('Seoul', 'SEO', 'Capitale della Corea del Sud.', 'Note su Seoul', 26, 37.5665, 126.9780, 10000000, 'Seul', 'Seoul', 'Séoul', 'Seoul', 'Seúl', 'Seul'),
('Singapore', 'SIN', 'Capitale di Singapore.', 'Note su Singapore', 27, 1.3521, 103.8198, 5450000, 'Singapore', 'Singapore', 'Singapour', 'Singapur', 'Singapur', 'Singapura'),
('Sri Jayawardenepura Kotte', 'SJY', 'Capitale amministrativa dello Sri Lanka.', 'Note su Sri Jayawardenepura Kotte', 28, 6.9939, 80.2337, 115000, 'Sri Jayawardenepura Kotte', 'Sri Jayawardenepura Kotte', 'Sri Jayawardenepura Kotte', 'Sri Jayawardenepura Kotte', 'Sri Jayawardenepura Kotte', 'Sri Jayawardenepura Kotte'),
('Taipei', 'TAI', 'Capitale di Taiwan.', 'Note su Taipei', 29, 25.0330, 121.5654, 2700000, 'Taipei', 'Taipei', 'Taipei', 'Taipeh', 'Taipei', 'Taipei'),
('Tokyo', 'TOK', 'Capitale del Giappone.', 'Note su Tokyo', 30, 35.6895, 139.6917, 13960000, 'Tokyo', 'Tokyo', 'Tokyo', 'Tokio', 'Tokio', 'Tóquio'),
('Ulaanbaatar', 'ULA', 'Capitale della Mongolia.', 'Note su Ulaanbaatar', 31, 47.8860, 106.9057, 1600000, 'Ulaanbaatar', 'Ulaanbaatar', 'Oulan-Bator', 'Ulaanbaatar', 'Ulán Bator', 'Ulaanbaatar'),
('Yerevan', 'YEV', 'Capitale dell\'Armenia.', 'Note su Yerevan', 32, 40.1792, 44.4991, 1100000, 'Yerevan', 'Yerevan', 'Erevan', 'Jerewan', 'Ereván', 'Erevan');

-- Europe
INSERT INTO lmgc_Cities (name, code, description, notes, country_id, latitude, longitude, population, name_italian, name_english, name_french, name_german, name_spanish, name_portuguese) VALUES
('Amsterdam', 'AMS', 'Capitale dei Paesi Bassi.', 'Note su Amsterdam', 1, 52.3676, 4.9041, 821752, 'Amsterdam', 'Amsterdam', 'Amsterdam', 'Amsterdam', 'Ámsterdam', 'Amsterdão'),
('Andorra la Vella', 'AND', 'Capitale di Andorra.', 'Note su Andorra la Vella', 2, 42.5078, 1.5211, 22000, 'Andorra la Vella', 'Andorra la Vella', 'Andorre-la-Vieille', 'Andorra la Vella', 'Andorra la Vieja', 'Andorra la Vella'),
('Athens', 'ATH', 'Capitale della Grecia.', 'Note su Athens', 3, 37.9838, 23.7275, 664046, 'Atene', 'Athens', 'Athènes', 'Athen', 'Atenas', 'Atenas'),
('Belgrade', 'BEG', 'Capitale della Serbia.', 'Note su Belgrade', 4, 44.8176, 20.4633, 1160000, 'Belgrado', 'Belgrade', 'Belgrade', 'Belgrad', 'Belgrado', 'Belgrado'),
('Berlin', 'BER', 'Capitale della Germania.', 'Note su Berlin', 5, 52.5200, 13.4050, 3645000, 'Berlino', 'Berlin', 'Berlin', 'Berlin', 'Berlín', 'Berlim'),
('Bern', 'BER', 'Capitale della Svizzera.', 'Note su Bern', 6, 46.9481, 7.4474, 133000, 'Berna', 'Bern', 'Berne', 'Bern', 'Berna', 'Berna'),
('Bucharest', 'BUC', 'Capitale della Romania.', 'Note su Bucharest', 7, 44.4268, 26.1025, 1840000, 'Bucarest', 'Bucharest', 'Bucarest', 'Bukarest', 'Bucarest', 'Bucareste'),
('Budapest', 'BUD', 'Capitale dell\'Ungheria.', 'Note su Budapest', 8, 47.4979, 19.0402, 1750000, 'Budapest', 'Budapest', 'Budapest', 'Budapest', 'Budapest', 'Budapeste'),
('Chisinau', 'CHI', 'Capitale della Moldova.', 'Note su Chisinau', 9, 47.0105, 28.8638, 825000, 'Chişinău', 'Chisinau', 'Chisinau', 'Chisinau', 'Chisináu', 'Chisinau'),
('Copenhagen', 'CPH', 'Capitale della Danimarca.', 'Note su Copenhagen', 10, 55.6761, 12.5683, 794128, 'Copenaghen', 'Copenhagen', 'Copenhague', 'Kopenhagen', 'Copenhague', 'Copenhague'),
('Dublin', 'DUB', 'Capitale dell\'Irlanda.', 'Note su Dublin', 11, 53.3331, -6.2489, 1170000, 'Dublino', 'Dublin', 'Dublin', 'Dublin', 'Dublín', 'Dublin'),
('Helsinki', 'HEL', 'Capitale della Finlandia.', 'Note su Helsinki', 12, 60.1699, 24.9384, 655000, 'Helsinki', 'Helsinki', 'Helsinki', 'Helsinki', 'Helsinki', 'Helsinque'),
('Kiev', 'KIE', 'Capitale dell\'Ucraina.', 'Note su Kiev', 13, 50.4501, 30.5234, 2840000, 'Kiev', 'Kiev', 'Kiev', 'Kiew', 'Kiev', 'Kiev'),
('Lisbon', 'LIS', 'Capitale del Portogallo.', 'Note su Lisbon', 14, 38.7223, -9.1399, 547000, 'Lisboa', 'Lisbon', 'Lisbonne', 'Lissabon', 'Lisboa', 'Lisboa'),
('Ljubljana', 'LJU', 'Capitale della Slovenia.', 'Note su Ljubljana', 15, 46.0511, 14.5051, 295000, 'Lubiana', 'Ljubljana', 'Ljubljana', 'Laibach', 'Liubliana', 'Liubliana'),
('Luxembourg City', 'LUX', 'Capitale del Lussemburgo.', 'Note su Luxembourg City', 16, 49.6117, 6.13, 128000, 'Lussemburgo', 'Luxembourg City', 'Luxembourg', 'Luxemburg', 'Luxemburgo', 'Luxemburgo'),
('Malta', 'VAL', 'Capitale di Malta.', 'Note su Valletta', 17, 35.8997, 14.5147, 67500, 'Valletta', 'Valletta', 'La Valette', 'Valetta', 'Valeta', 'Valeta'),
('Monaco', 'MON', 'Capitale del Monaco.', 'Note su Monaco', 18, 43.7333, 7.4167, 38000, 'Monaco', 'Monaco', 'Monaco', 'Monaco', 'Mónaco', 'Mónaco'),
('Moscow', 'MOS', 'Capitale della Russia.', 'Note su Mosca', 19, 55.7558, 37.6176, 11920000, 'Mosca', 'Moscow', 'Moscou', 'Moskau', 'Moscú', 'Moscovo'),
('Oslo', 'OSL', 'Capitale della Norvegia.', 'Note su Oslo', 20, 59.9139, 10.7522, 1010000, 'Oslo', 'Oslo', 'Oslo', 'Oslo', 'Oslo', 'Oslo'),
('Podgorica', 'POD', 'Capitale del Montenegro.', 'Note su Podgorica', 21, 42.4411, 19.2636, 185000, 'Podgorica', 'Podgorica', 'Podgorica', 'Podgorica', 'Podgorica', 'Podgorica'),
('Prague', 'PRG', 'Capitale della Repubblica Ceca.', 'Note su Prague', 22, 50.0755, 14.4378, 1300000, 'Praga', 'Prague', 'Prague', 'Prag', 'Praga', 'Praga'),
('Reykjavik', 'REY', 'Capitale dell\'Islanda.', 'Note su Reykjavik', 23, 64.1466, -21.9426, 133000, 'Reykjavík', 'Reykjavik', 'Reykjavik', 'Reykjavik', 'Reikiavik', 'Reiquiavique'),
('Riga', 'RIG', 'Capitale della Lettonia.', 'Note su Riga', 24, 56.9496, 24.1059, 632000, 'Riga', 'Riga', 'Riga', 'Riga', 'Riga', 'Riga'),
('Rome', 'ROM', 'Capitale dell\'Italia.', 'Note su Rome', 25, 41.9028, 12.4964, 2873000, 'Roma', 'Rome', 'Rome', 'Rom', 'Roma', 'Roma'),
('San Marino', 'SMA', 'Capitale di San Marino.', 'Note su San Marino', 26, 43.9333, 12.45, 83000, 'San Marino', 'San Marino', 'Saint-Marin', 'San Marino', 'San Marino', 'São Marino'),
('Sarajevo', 'SJJ', 'Capitale della Bosnia ed Erzegovina.', 'Note su Sarajevo', 27, 43.8486, 18.3564, 275000, 'Sarajevo', 'Sarajevo', 'Sarajevo', 'Sarajewo', 'Sarajevo', 'Sarajevo'),
('Skopje', 'SKP', 'Capitale della Macedonia del Nord.', 'Note su Skopje', 28, 41.9981, 21.4254, 550000, 'Skopje', 'Skopje', 'Skopje', 'Skopje', 'Skopje', 'Escopia'),
('Sofia', 'SOF', 'Capitale della Bulgaria.', 'Note su Sofia', 29, 42.6977, 23.3219, 1220000, 'Sofia', 'Sofia', 'Sofia', 'Sofia', 'Sofía', 'Sófia'),
('Stockholm', 'STO', 'Capitale della Svezia.', 'Note su Stockholm', 30, 59.3293, 18.0686, 975000, 'Stoccolma', 'Stockholm', 'Stockholm', 'Stockholm', 'Estocolmo', 'Estocolmo'),
('Tbilisi', 'TBI', 'Capitale della Georgia.', 'Note su Tbilisi', 31, 41.7151, 44.8271, 1130000, 'Tbilisi', 'Tbilisi', 'Tbilissi', 'Tiflis', 'Tiflis', 'Tbilisi'),
('Vienna', 'VIE', 'Capitale dell\'Austria.', 'Note su Vienna', 32, 48.2082, 16.3738, 1900000, 'Vienna', 'Vienna', 'Vienne', 'Wien', 'Viena', 'Viena'),
('Vilnius', 'VIL', 'Capitale della Lituania.', 'Note su Vilnius', 33, 54.6872, 25.2797, 580000, 'Vilnius', 'Vilnius', 'Vilnius', 'Wilna', 'Vilna', 'Vilnius'),
('Warsaw', 'WAR', 'Capitale della Polonia.', 'Note su Warsaw', 34, 52.2297, 21.0122, 1790000, 'Varsavia', 'Warsaw', 'Varsovie', 'Warschau', 'Varsovia', 'Varsóvia'),
('Zagreb', 'ZAG', 'Capitale della Croazia.', 'Note su Zagreb', 35, 45.8150, 15.9819, 810000, 'Zagabria', 'Zagreb', 'Zagreb', 'Zagreb', 'Zagreb', 'Zagreb');

-- North America
INSERT INTO lmgc_Cities (name, code, description, notes, country_id, latitude, longitude, population, name_italian, name_english, name_french, name_german, name_spanish, name_portuguese) VALUES
('Antigua', 'ANT', 'Capitale di Antigua e Barbuda.', 'Note su Antigua', 1, 17.1167, -61.8500, 24000, 'Antigua', 'Antigua', 'Antigua', 'Antigua', 'Antigua', 'Antígua'),
('Bridgetown', 'BRI', 'Capitale di Barbados.', 'Note su Bridgetown', 2, 13.1050, -59.6319, 110000, 'Bridgetown', 'Bridgetown', 'Bridgetown', 'Bridgetown', 'Bridgetown', 'Bridgetown'),
('Castries', 'CAS', 'Capitale di Santa Lucia.', 'Note su Castries', 3, 14.0101, -60.9780, 20000, 'Castries', 'Castries', 'Castries', 'Castries', 'Castries', 'Castries'),
('Charlotte Amalie', 'CHA', 'Capitale delle Isole Vergini Americane.', 'Note su Charlotte Amalie', 4, 18.3400, -64.9300, 11000, 'Charlotte Amalie', 'Charlotte Amalie', 'Charlotte Amalie', 'Charlotte Amalie', 'Charlotte Amalie', 'Charlotte Amalie'),
('Guatemala City', 'GUA', 'Capitale del Guatemala.', 'Note su Guatemala City', 5, 14.6349, -90.5069, 3020000, 'Città del Guatemala', 'Guatemala City', 'Guatemala', 'Guatemala-Stadt', 'Ciudad de Guatemala', 'Cidade da Guatemala'),
('Helsinki', 'HEL', 'Capitale della Finlandia.', 'Note su Helsinki', 6, 60.1699, 24.9384, 655000, 'Helsinki', 'Helsinki', 'Helsinki', 'Helsinki', 'Helsinki', 'Helsinque'),
('Kingston', 'KIN', 'Capitale della Giamaica.', 'Note su Kingston', 7, 17.9714, -76.7921, 670000, 'Kingston', 'Kingston', 'Kingston', 'Kingston', 'Kingston', 'Kingston'),
('Nassau', 'NAS', 'Capitale delle Bahamas.', 'Note su Nassau', 8, 25.0343, -77.3963, 270000, 'Nassau', 'Nassau', 'Nassau', 'Nassau', 'Nassau', 'Nassau'),
('Panama City', 'PAN', 'Capitale di Panama.', 'Note su Panama City', 9, 8.9824, -79.5199, 920000, 'Città di Panama', 'Panama City', 'Panama', 'Panama-Stadt', 'Ciudad de Panamá', 'Cidade do Panamá'),
('Port au Prince', 'PAH', 'Capitale di Haiti.', 'Note su Port au Prince', 10, 18.5944, -72.3074, 987000, 'Porto Príncipe', 'Port au Prince', 'Port-au-Prince', 'Port-au-Prince', 'Puerto Príncipe', 'Porto Príncipe'),
('San Salvador', 'SAN', 'Capitale di El Salvador.', 'Note su San Salvador', 11, 13.6929, -89.2182, 600000, 'San Salvador', 'San Salvador', 'San Salvador', 'San Salvador', 'San Salvador', 'San Salvador'),
('Santo Domingo', 'SDQ', 'Capitale della Repubblica Dominicana.', 'Note su Santo Domingo', 12, 18.4861, -69.9312, 1100000, 'Santo Domingo', 'Santo Domingo', 'Saint-Domingue', 'Santo Domingo', 'Santo Domingo', 'Santo Domingo'),
('Tegucigalpa', 'TEG', 'Capitale dell\'Honduras.', 'Note su Tegucigalpa', 13, 14.0723, -87.9610, 1180000, 'Tegucigalpa', 'Tegucigalpa', 'Tegucigalpa', 'Tegucigalpa', 'Tegucigalpa', 'Tegucigalpa'),
('Washington, D.C.', 'WDC', 'Capitale degli Stati Uniti d\'America.', 'Note su Washington, D.C.', 14, 38.8951, -77.0369, 705749, 'Washington', 'Washington, D.C.', 'Washington', 'Washington', 'Washington', 'Washington, D.C.');

-- Oceania
INSERT INTO lmgc_Cities (name, code, description, notes, country_id, latitude, longitude, population, name_italian, name_english, name_french, name_german, name_spanish, name_portuguese) VALUES
('Canberra', 'CAN', 'Capitale dell\'Australia.', 'Note su Canberra', 1, -35.2809, 149.1300, 430000, 'Canberra', 'Canberra', 'Canberra', 'Canberra', 'Canberra', 'Canberra'),
('Honiara', 'HON', 'Capitale delle Isole Salomone.', 'Note su Honiara', 2, -9.4333, 159.9667, 84000, 'Honiara', 'Honiara', 'Honiara', 'Honiara', 'Honiara', 'Honiara'),
('Port Moresby', 'POR', 'Capitale della Papua Nuova Guinea.', 'Note su Port Moresby', 3, -9.4438, 147.1784, 350000, 'Port Moresby', 'Port Moresby', 'Port Moresby', 'Port Moresby', 'Port Moresby', 'Port Moresby'),
('Suva', 'SUV', 'Capitale delle Figi.', 'Note su Suva', 4, -18.1416, 178.4419, 93000, 'Suva', 'Suva', 'Suva', 'Suva', 'Suva', 'Suva'),
('Wellington', 'WEL', 'Capitale della Nuova Zelanda.', 'Note su Wellington', 5, -41.2865, 174.7762, 215000, 'Wellington', 'Wellington', 'Wellington', 'Wellington', 'Wellington', 'Wellington');

-- South America
INSERT INTO lmgc_Cities (name, code, description, notes, country_id, latitude, longitude, population, name_italian, name_english, name_french, name_german, name_spanish, name_portuguese) VALUES
('Asunción', 'ASU', 'Capitale del Paraguay.', 'Note su Asunción', 1, -25.2637, -57.5759, 540000, 'Asunción', 'Asunción', 'Asunción', 'Asunción', 'Asunción', 'Asunción'),
('Bogotá', 'BOG', 'Capitale della Colombia.', 'Note su Bogotá', 2, 4.6100, -74.0827, 7870000, 'Bogotá', 'Bogotá', 'Bogotá', 'Bogotá', 'Bogotá', 'Bogotá'),
('Brasilia', 'BSB', 'Capitale del Brasile.', 'Note su Brasilia', 3, -15.7801, -47.9292, 3110000, 'Brasilia', 'Brasilia', 'Brasilia', 'Brasília', 'Brasilia', 'Brasília'),
('Buenos Aires', 'BAI', 'Capitale dell\'Argentina.', 'Note su Buenos Aires', 4, -34.6037, -58.3816, 2890000, 'Buenos Aires', 'Buenos Aires', 'Buenos Aires', 'Buenos Aires', 'Buenos Aires', 'Buenos Aires'),
('Caracas', 'CAR', 'Capitale del Venezuela.', 'Note su Caracas', 5, 10.4916, -66.9028, 2750000, 'Caracas', 'Caracas', 'Caracas', 'Karakas', 'Caracas', 'Caracas'),
('Lima', 'LIM', 'Capitale del Perù.', 'Note su Lima', 6, -12.0464, -77.0428, 10150000, 'Lima', 'Lima', 'Lima', 'Lima', 'Lima', 'Lima'),
('Montevideo', 'MVD', 'Capitale dell\'Uruguay.', 'Note su Montevideo', 7, -34.9036, -56.1881, 1300000, 'Montevideo', 'Montevideo', 'Montevideo', 'Montevideo', 'Montevideo', 'Montevideo'),
('Quito', 'UIO', 'Capitale dell\'Ecuador.', 'Note su Quito', 8, -0.1807, -78.4678, 2720000, 'Quito', 'Quito', 'Quito', 'Quito', 'Quito', 'Quito'),
('Santiago', 'SCL', 'Capitale del Cile.', 'Note su Santiago', 9, -33.4489, -70.6693, 6550000, 'Santiago', 'Santiago', 'Santiago', 'Santiago', 'Santiago', 'Santiago'),
('Sucre', 'SUC', 'Capitale costituzionale della Bolivia.', 'Note su Sucre', 10, -19.0333, -65.2628, 300000, 'Sucre', 'Sucre', 'Sucre', 'Sucre', 'Sucre', 'Sucre'),
('La Paz', 'LPZ', 'Capitale amministrativa della Bolivia.', 'Note su La Paz', 11, -16.5000, -68.1193, 790000, 'La Paz', 'La Paz', 'La Paz', 'La Paz', 'La Paz', 'La Paz'),
('Brasília', 'BSB', 'Capitale del Brasile.', 'Note su Brasília', 12, -15.7801, -47.9292, 3110000, 'Brasília', 'Brasília', 'Brasília', 'Brasília', 'Brasilia', 'Brasília'),
('Bogotá', 'BOG', 'Capitale della Colombia.', 'Note su Bogotá', 13, 4.6100, -74.0827, 7870000, 'Bogotá', 'Bogotá', 'Bogotá', 'Bogotá', 'Bogotá', 'Bogotá'),
('Buenos Aires', 'BAI', 'Capitale dell\'Argentina.', 'Note su Buenos Aires', 14, -34.6037, -58.3816, 2890000, 'Buenos Aires', 'Buenos Aires', 'Buenos Aires', 'Buenos Aires', 'Buenos Aires', 'Buenos Aires'),
('Caracas', 'CAR', 'Capitale del Venezuela.', 'Note su Caracas', 15, 10.4916, -66.9028, 2750000, 'Caracas', 'Caracas', 'Caracas', 'Caracas', 'Caracas', 'Caracas'),
('Lima', 'LIM', 'Capitale del Perù.', 'Note su Lima', 16, -12.0464, -77.0428, 10150000, 'Lima', 'Lima', 'Lima', 'Lima', 'Lima', 'Lima'),
('Montevideo', 'MVD', 'Capitale dell\'Uruguay.', 'Note su Montevideo', 17, -34.9036, -56.1881, 1300000, 'Montevideo', 'Montevideo', 'Montevideo', 'Montevideo', 'Montevideo', 'Montevideo'),
('Quito', 'UIO', 'Capitale dell\'Ecuador.', 'Note su Quito', 18, -0.1807, -78.4678, 2720000, 'Quito', 'Quito', 'Quito', 'Quito', 'Quito', 'Quito'),
('Santiago', 'SCL', 'Capitale del Cile.', 'Note su Santiago', 19, -33.4489, -70.6693, 6550000, 'Santiago', 'Santiago', 'Santiago', 'Santiago', 'Santiago', 'Santiago'),
('Sucre', 'SUC', 'Capitale costituzionale della Bolivia.', 'Note su Sucre', 20, -19.0333, -65.2628, 300000, 'Sucre', 'Sucre', 'Sucre', 'Sucre', 'Sucre', 'Sucre'),
('La Paz', 'LPZ', 'Capitale amministrativa della Bolivia.', 'Note su La Paz', 21, -16.5000, -68.1193, 790000, 'La Paz', 'La Paz', 'La Paz', 'La Paz', 'La Paz', 'La Paz');

ALTER TABLE lmgc_Cities
ADD COLUMN is_capital BOOLEAN DEFAULT FALSE;

UPDATE lmgc_Cities
SET is_capital = TRUE
