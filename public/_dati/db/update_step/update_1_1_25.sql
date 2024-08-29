DROP TABLE IF EXISTS lmgc_Cities;
DROP TABLE IF EXISTS lmgc_Countries;
DROP TABLE IF EXISTS lmgc_Continents;

CREATE TABLE IF NOT EXISTS lmgc_Continents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    code VARCHAR(3) NOT NULL UNIQUE,
    iso_3166_1 VARCHAR(3) NOT NULL UNIQUE,
    m49_code INT NOT NULL UNIQUE,
    geoname_id INT NOT NULL UNIQUE,
    surface_area DECIMAL(15, 2),
    population BIGINT,
    num_countries INT,
    description TEXT,
    notes TEXT,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lmgc_Continents (name, code, iso_3166_1, m49_code, geoname_id, surface_area, population, num_countries, description, notes) VALUES
('Africa', 'AF', 'AF', 002, 6255146, 30370000.00, 1400000000, 54, 'Il secondo continente più grande per superficie e popolazione. Include il deserto del Sahara e una vasta biodiversità.', 'Culla dell\'umanità con antiche civiltà come quella egizia.'),
('Antarctica', 'AN', 'AQ', 010, 6255152, 14000000.00, 0, 0, 'Il continente più freddo, secco e ventoso. Privo di popolazione permanente, ospita solo ricercatori.', 'Governato da trattati internazionali per scopi scientifici e pacifici.'),
('Asia', 'AS', 'AS', 142, 6255147, 44580000.00, 4700000000, 49, 'Il continente più grande e popolato. Culla di antiche civiltà e religioni.', 'Include la catena montuosa dell\'Himalaya e grandi deserti.'),
('Europe', 'EU', 'EU', 150, 6255148, 10180000.00, 750000000, 44, 'Piccolo ma storicamente influente, sede di numerose culture, lingue e tradizioni.', 'Include l\'Unione Europea, un importante organismo politico.'),
('North America', 'NA', 'NA', 021, 6255149, 24710000.00, 600000000, 23, 'Comprende gli Stati Uniti, il Canada, il Messico e i Caraibi, con una grande varietà di climi e paesaggi.', 'Forte influenza globale, soprattutto dagli Stati Uniti.'),
('Oceania', 'OC', 'OC', 009, 6255151, 8530000.00, 43000000, 14, 'Comprende Australia, Nuova Zelanda e migliaia di isole del Pacifico. Ricca biodiversità.', 'Cultura unica delle popolazioni indigene e delle isole del Pacifico.'),
('South America', 'SA', 'SA', 005, 6255150, 17840000.00, 430000000, 12, 'Ospita la foresta pluviale amazzonica e grandi risorse naturali.', 'Ricca storia che include civiltà come gli Inca e l\'influenza coloniale.');
