CREATE TABLE IF NOT EXISTS lmgc_Continents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    population BIGINT,
    area_km2 BIGINT,
    note TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lmgc_Continents (name, population, area_km2, note) VALUES
('Africa', 1340598000, 30370000, 'Africa is the second-largest and second-most populous continent on Earth. It is known for its diverse cultures, lmgc_Languages, and wildlife.'),
('Antarctica', 1106, 14000000, 'Antarctica is the southernmost continent, containing the geographic South Pole. It is the coldest, windiest, and driest continent, with no permanent human population.'),
('Asia', 4641054775, 44579000, 'Asia is the largest and most populous continent, home to many of the world s oldest civilizations and a wide variety of cultures, lmgc_Languages, and environments.'),
('Europe', 746419440, 10180000, 'Europe is known for its rich history, cultural heritage, and significant influence on global affairs. It comprises over 40 countries.'),
('North America', 592072212, 24709000, 'North America is a continent that includes Canada, the United States, Mexico, and various smaller countries. It is known for its diverse climates and cultures.'),
('Australia', 42677813, 8600000, 'Australia, often referred to as Oceania when including the Pacific islands, is the smallest continent by land area and population. It is known for its unique wildlife and natural landscapes.'),
('South America', 430759766, 17840000, 'South America is known for its diverse ecosystems, including the Amazon rainforest, Andes mountains, and many vibrant cultures. It consists of 12 countries.');
