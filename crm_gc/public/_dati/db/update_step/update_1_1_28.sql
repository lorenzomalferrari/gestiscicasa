/*
-- ASIA

-- Inserimento capitali asiatiche
INSERT INTO lm_Cities (name, code, notes, country_id, latitude, longitude, population, isCapital) VALUES
-- Afghanistan
('Kabul', 'KAB', 'Capitale dell\'Afghanistan', 51, 34.5553, 69.2075, 4360000, TRUE),
-- Armenia
('Yerevan', 'YEV', 'Capitale dell\'Armenia', 52, 40.1792, 44.4991, 1150000, TRUE),
-- Azerbaijan
('Baku', 'BAK', 'Capitale dell\'Azerbaijan', 53, 40.4093, 49.8671, 2300000, TRUE),
-- Bahrain
('Manama', 'MNA', 'Capitale del Bahrain', 54, 26.2207, 50.5860, 157000, TRUE),
-- Bangladesh
('Dhaka', 'DHA', 'Capitale del Bangladesh', 55, 23.8103, 90.4125, 8900000, TRUE),
-- Bhutan
('Thimphu', 'THI', 'Capitale del Bhutan', 56, 27.4667, 89.6333, 114000, TRUE),
-- Brunei
('Bandar Seri Begawan', 'BSB', 'Capitale del Brunei', 57, 4.8967, 114.9400, 100700, TRUE),
-- Cambogia
('Phnom Penh', 'PNH', 'Capitale della Cambogia', 58, 11.5564, 104.9282, 2120000, TRUE),
-- Cina
('Pechino', 'PEK', 'Capitale della Cina', 59, 39.9042, 116.4074, 21500000, TRUE),
-- Cipro
('Nicosia', 'NIC', 'Capitale di Cipro', 60, 35.1856, 33.3823, 55800, TRUE),
-- Georgia
('Tbilisi', 'TBS', 'Capitale della Georgia', 61, 41.7151, 44.8271, 1130000, TRUE),
-- India
('Nuova Delhi', 'DEL', 'Capitale dell\'India', 62, 28.6139, 77.2090, 32100000, TRUE),
-- Indonesia
('Giakarta', 'JKT', 'Capitale dell\'Indonesia', 63, -6.2088, 106.8456, 10700000, TRUE),
-- Iran
('Teheran', 'THR', 'Capitale dell\'Iran', 64, 35.6892, 51.3890, 8700000, TRUE),
-- Iraq
('Baghdad', 'BGW', 'Capitale dell\'Iraq', 65, 33.3152, 44.3661, 8200000, TRUE),
-- Israele
('Gerusalemme', 'JRS', 'Capitale di Israele', 66, 31.7683, 35.2137, 900000, TRUE),
-- Giappone
('Tokyo', 'TYO', 'Capitale del Giappone', 67, 35.6762, 139.6503, 13900000, TRUE),
-- Giordania
('Amman', 'AMM', 'Capitale della Giordania', 68, 31.9454, 35.9284, 5000000, TRUE),
-- Kazakhstan
('Nursultan', 'TSE', 'Capitale del Kazakhstan', 69, 51.1694, 71.4491, 1400000, TRUE),
-- Kuwait
('Kuwait City', 'KWI', 'Capitale del Kuwait', 70, 29.3759, 47.9774, 308000, TRUE),
-- Laos
('Vientiane', 'VTE', 'Capitale del Laos', 71, 17.9757, 102.6331, 82000, TRUE),
-- Libano
('Beirut', 'BEY', 'Capitale del Libano', 72, 33.8889, 35.4944, 3610000, TRUE),
-- Malaysia
('Kuala Lumpur', 'KUL', 'Capitale della Malaysia', 73, 3.139, 101.6869, 1780000, TRUE),
-- Maldivas
('Male', 'MLE', 'Capitale delle Maldivas', 74, 4.1755, 73.5093, 133000, TRUE),
-- Mongolia
('Ulaanbaatar', 'ULN', 'Capitale della Mongolia', 75, 47.8860, 106.9057, 1600000, TRUE),
-- Myanmar
('Naypyidaw', 'NPT', 'Capitale del Myanmar', 76, 19.7450, 96.1084, 925000, TRUE),
-- Nepal
('Kathmandu', 'KTM', 'Capitale del Nepal', 77, 27.7172, 85.3240, 1100000, TRUE),
-- Oman
('Muscat', 'MCT', 'Capitale dell\'Oman', 78, 23.6139, 58.5921, 1120000, TRUE),
-- Pakistan
('Islamabad', 'ISB', 'Capitale del Pakistan', 79, 33.6844, 73.0479, 1190000, TRUE),
-- Palestina
('Ramallah', 'RAM', 'Capitale della Palestina', 80, 31.8997, 35.3026, 100000, TRUE),
-- Qatar
('Doha', 'DOH', 'Capitale del Qatar', 81, 25.2760, 51.5200, 850000, TRUE),
-- Arabia Saudita
('Riyadh', 'RUH', 'Capitale dell\'Arabia Saudita', 82, 24.7136, 46.6753, 7800000, TRUE),
-- Singapore
('Singapore', 'SIN', 'Capitale di Singapore', 83, 1.3521, 103.8198, 5700000, TRUE),
-- Siria
('Damasco', 'DAM', 'Capitale della Siria', 84, 33.5138, 36.2765, 18900000, TRUE),
-- Sri Lanka
('Colombo', 'COL', 'Capitale commerciale dello Sri Lanka', 85, 6.9271, 79.9612, 752993, FALSE),
('Sri Jayawardenepura Kotte', 'SJK', 'Capitale amministrativa dello Sri Lanka', 85, 6.9271, 79.9585, 115000, TRUE),
-- Tagikistan
('Dushanbe', 'DYU', 'Capitale del Tagikistan', 86, 38.5599, 68.4780, 814000, TRUE),
-- Thailandia
('Bangkok', 'BKK', 'Capitale della Thailandia', 87, 13.7563, 100.5018, 8200000, TRUE),
-- Timor Est
('Dili', 'DIL', 'Capitale di Timor Est', 88, -8.5560, 125.5270, 234000, TRUE),
-- Turchia
('Ankara', 'ANK', 'Capitale della Turchia', 89, 39.9334, 32.8597, 5500000, TRUE),
-- Turkmenistan
('Ashgabat', 'ASB', 'Capitale del Turkmenistan', 90, 37.9604, 58.3792, 1150000, TRUE),
-- Emirati Arabi Uniti
('Abu Dhabi', 'AUH', 'Capitale degli Emirati Arabi Uniti', 91, 24.4538, 54.3773, 1450000, TRUE),
-- Uzbekistan
('Tashkent', 'TAS', 'Capitale dell\'Uzbekistan', 92, 41.3111, 69.2400, 2510000, TRUE),
-- Vietnam
('Hanoi', 'HAN', 'Capitale del Vietnam', 93, 21.0285, 105.8542, 8000000, TRUE),
-- Yemen
('Sana\'a', 'SAH', 'Capitale dello Yemen', 94, 15.3694, 44.1910, 2700000, TRUE);
*/
