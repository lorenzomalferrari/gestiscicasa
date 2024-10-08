CREATE TABLE IF NOT EXISTS lmgc_Countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL UNIQUE,
    code VARCHAR(3) NOT NULL UNIQUE, -- ISO 3166-1 alfa-2 o alfa-3
    iso_3166_1 VARCHAR(3) NOT NULL UNIQUE, -- Codice ISO 3166-1 alfa-2 o alfa-3
    iso_3166_2 VARCHAR(3), -- Codice ISO 3166-1 alfa-2 (opzionale)
    m49_code INT NOT NULL UNIQUE, -- Codice M49
    geoname_id INT NOT NULL UNIQUE, -- ID GeoNames
    continent_id INT, -- Chiave esterna che si riferisce al continente
    surface_area DECIMAL(15, 2), -- Superficie del paese in km²
    population BIGINT, -- Popolazione del paese
    currency_id INT, -- Chiave esterna che si riferisce alla tabella delle valute
    description TEXT, -- Descrizione del paese
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_continent FOREIGN KEY (continent_id) REFERENCES lmgc_Continents(id) ON DELETE SET NULL,
    CONSTRAINT fk_currency FOREIGN KEY (currency_id) REFERENCES lmgc_Currencies(id) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS lmgc_CountriesLanguages (
    country_id INT,
    language_id INT,
    PRIMARY KEY (country_id, language_id),
    CONSTRAINT fk_country FOREIGN KEY (country_id) REFERENCES lmgc_Countries(id) ON DELETE CASCADE,
    CONSTRAINT fk_language FOREIGN KEY (language_id) REFERENCES lmgc_Languages(id) ON DELETE CASCADE
);
/*
INSERT INTO lmgc_Countries (name, code, iso_3166_1, iso_3166_2, m49_code, geoname_id, continent_id, surface_area, population, currency_id, description) VALUES
('Algeria', 'DZ', 'DZ', 'DZA', 12, 2589581, 1, 2381741.00, 40400000, 1, 'Il paese più grande dell\'Africa per superficie.'),
('Angola', 'AO', 'AO', 'AGO', 24, 3351879, 1, 1246700.00, 25868000, 2, 'Conosciuto per le sue risorse minerarie.'),
('Benin', 'BJ', 'BJ', 'BEN', 204, 2394726, 1, 11295.00, 10653654, 3, 'Famoso per il suo patrimonio culturale.'),
('Botswana', 'BW', 'BW', 'BWA', 72, 933860, 1, 581730.00, 2141206, 4, 'Conosciuto per il deserto del Kalahari.'),
('Burkina Faso', 'BF', 'BF', 'BFA', 854, 2361801, 1, 272967.00, 19034397, 5, 'Famoso per la sua cultura musicale e artistica.'),
('Burundi', 'BI', 'BI', 'BDI', 108, 433561, 1, 27834.00, 10114505, 6, 'Uno dei paesi più piccoli dell\'Africa.'),
('Cabo Verde', 'CV', 'CV', 'CPV', 132, 2377468, 1, 4033.00, 531239, 7, 'Un arcipelago nel Oceano Atlantico.'),
('Camerun', 'CM', 'CM', 'CMR', 120, 2230284, 1, 475442.00, 22709892, 8, 'Conosciuto per la sua biodiversità.'),
('Repubblica Centrafricana', 'CF', 'CF', 'CAF', 140, 2399396, 1, 622984.00, 4998000, 9, 'Un paese ricco di risorse naturali.'),
('Chad', 'TD', 'TD', 'TCD', 148, 2223378, 1, 1284000.00, 14497000, 10, 'Famoso per il deserto del Sahara.'),
('Comore', 'KM', 'KM', 'COM', 174, 921607, 1, 2235.00, 806153, 11, 'Un arcipelago nell\'Oceano Indiano.'),
('Congo (Brazzaville)', 'CG', 'CG', 'COG', 178, 2260484, 1, 342000.00, 4740000, 12, 'Famoso per le sue foreste tropicali.'),
('Congo (Kinshasa)', 'CD', 'CD', 'COD', 180, 850980, 1, 2344858.00, 85000000, 13, 'Il secondo paese più grande dell\'Africa per superficie.'),
('Costa d\'Avorio', 'CI', 'CI', 'CIV', 384, 2287784, 1, 322463.00, 24600000, 14, 'Conosciuto per il suo cacao.'),
('Djibouti', 'DJ', 'DJ', 'DJI', 262, 223817, 1, 23200.00, 818000, 15, 'Strategicamente importante per il commercio.'),
('Egitto', 'EG', 'EG', 'EGY', 818, 357786, 1, 1001450.00, 91250000, 16, 'Famoso per le piramidi e la storia antica.'),
('Eritrea', 'ER', 'ER', 'ERI', 232, 371800, 1, 117600.00, 3546000, 17, 'Famoso per le sue risorse minerarie.'),
('Eswatini', 'SZ', 'SZ', 'SWZ', 748, 934292, 1, 17364.00, 1160164, 18, 'Conosciuto per la sua cultura tradizionale.'),
('Etiopia', 'ET', 'ET', 'ETH', 231, 345091, 1, 1127127.00, 114963588, 19, 'Conosciuto per la sua storia antica e la religione.'),
('Gabon', 'GA', 'GA', 'GAB', 266, 240535, 1, 267668.00, 2172573, 20, 'Famoso per le sue foreste pluviali.'),
('Gambia', 'GM', 'GM', 'GMB', 270, 2413451, 1, 11295.00, 2416668, 21, 'Il paese più piccolo dell\'Africa continentale.'),
('Ghana', 'GH', 'GH', 'GHA', 288, 2307855, 1, 238533.00, 31072940, 22, 'Famoso per la sua storia culturale e risorse minerarie.'),
('Guinea', 'GN', 'GN', 'GIN', 324, 2420477, 1, 245857.00, 12947000, 23, 'Conosciuta per la sua produzione di bauxite.'),
('Guinea-Bissau', 'GW', 'GW', 'GNB', 624, 2372249, 1, 36125.00, 1900000, 24, 'Famosa per il suo patrimonio culturale.'),
('Ivory Coast', 'CI', 'CI', 'CIV', 384, 2287784, 1, 322463.00, 24600000, 25, 'Famosa per la sua produzione di cacao.'),
('Liberia', 'LR', 'LR', 'LBR', 430, 2276103, 1, 111369.00, 5030000, 26, 'Conosciuta per la sua storia unica e le risorse naturali.'),
('Libia', 'LY', 'LY', 'LBY', 434, 2212634, 1, 1759540.00, 6871292, 27, 'Conosciuta per il deserto del Sahara.'),
('Madagascar', 'MG', 'MG', 'MDG', 450, 1067567, 1, 587041.00, 27270000, 28, 'Famosa per la sua fauna unica e le foreste pluviali.'),
('Malawi', 'MW', 'MW', 'MWI', 454, 927684, 1, 118484.00, 19129952, 29, 'Conosciuto per il lago Malawi.'),
('Mali', 'ML', 'ML', 'MLI', 466, 2453866, 1, 1240192.00, 19600000, 30, 'Famoso per il deserto del Sahara e la sua cultura storica.'),
('Mauritania', 'MR', 'MR', 'MRT', 478, 2370843, 1, 1030700.00, 4556000, 31, 'Conosciuta per il deserto del Sahara e le sue risorse minerarie.'),
('Mauritius', 'MU', 'MU', 'MUS', 480, 934292, 1, 2040.00, 1265000, 32, 'Famosa per le sue spiagge e il turismo.'),
('Marocco', 'MA', 'MA', 'MAR', 504, 254200, 1, 446550.00, 36910560, 33, 'Conosciuto per i suoi mercati e la cultura.'),
('Mozambico', 'MZ', 'MZ', 'MOZ', 508, 1036978, 1, 801590.00, 31255435, 34, 'Famoso per le sue spiagge e il turismo.'),
('Niger', 'NE', 'NE', 'NER', 562, 2440466, 1, 1267000.00, 24206644, 35, 'Conosciuto per il deserto del Sahara e la cultura.'),
('Nigeria', 'NG', 'NG', 'NGA', 566, 2328926, 1, 923768.00, 206139589, 36, 'Il paese più popoloso dell\'Africa.'),
('Ruanda', 'RW', 'RW', 'RWA', 646, 812994, 1, 26338.00, 12952218, 37, 'Famoso per la sua fauna selvatica e i parchi naturali.'),
('Sao Tome e Principe', 'ST', 'ST', 'STP', 678, 2412361, 1, 964.00, 194300, 38, 'Un piccolo arcipelago nell\'Oceano Atlantico.'),
('Senegal', 'SN', 'SN', 'SEN', 686, 2253354, 1, 196722.00, 17170000, 39, 'Conosciuto per il suo patrimonio culturale.'),
('Seychelles', 'SC', 'SC', 'SYC', 690, 2412587, 1, 459.00, 98200, 40, 'Famosa per le sue isole e il turismo.'),
('Sierra Leone', 'SL', 'SL', 'SLE', 694, 2402912, 1, 71740.00, 7969000, 41, 'Famosa per il suo patrimonio culturale.'),
('Somalia', 'SO', 'SO', 'SOM', 706, 649455, 1, 637657.00, 17900000, 42, 'Conosciuta per la sua storia e cultura.'),
('South Africa', 'ZA', 'ZA', 'ZAF', 710, 974738, 1, 1219090.00, 61290000, 43, 'Conosciuta per la sua diversità culturale e naturale.'),
('South Sudan', 'SS', 'SS', 'SSD', 728, 790980, 1, 619745.00, 10600000, 44, 'Il paese più giovane dell\'Africa.'),
('Sudan', 'SD', 'SD', 'SDN', 729, 367334, 1, 1861484.00, 45310000, 45, 'Conosciuto per la sua storia antica e le sue risorse.'),
('Togo', 'TG', 'TG', 'TGO', 768, 2363672, 1, 56785.00, 8260000, 46, 'Conosciuto per il suo patrimonio culturale.'),
('Tunisia', 'TN', 'TN', 'TUN', 788, 246447, 1, 163610.00, 11580000, 47, 'Famosa per le sue spiagge e la storia.'),
('Uganda', 'UG', 'UG', 'UGA', 800, 2260483, 1, 241550.00, 48870000, 48, 'Conosciuta per il lago Victoria e i parchi nazionali.'),
('Zambia', 'ZM', 'ZM', 'ZMB', 894, 893506, 1, 752612.00, 20350000, 49, 'Conosciuta per il fiume Zambezi e le cascate Vittoria.'),
('Zimbabwe', 'ZW', 'ZW', 'ZWE', 716, 878675, 1, 390757.00, 15330000, 50, 'Famosa per le sue riserve naturali e i parchi.');


INSERT INTO lmgc_Countries (name, code, iso_3166_1, iso_3166_2, m49_code, geoname_id, continent_id, surface_area, population, currency_id, description) VALUES
('Afghanistan', 'AF', 'AF', 'AFG', 4, 1149361, 3, 652230.00, 38300000, 1, 'Conosciuto per la sua storia complessa e le montagne.'),
('Armenia', 'AM', 'AM', 'ARM', 51, 174982, 3, 29743.00, 2963243, 2, 'Un paese con una lunga storia culturale e religiosa.'),
('Azerbaijan', 'AZ', 'AZ', 'AZE', 31, 587940, 3, 86600.00, 9720000, 3, 'Conosciuto per il suo ricco patrimonio culturale.'),
('Bahrain', 'BH', 'BH', 'BHR', 48, 290291, 3, 765.00, 1380000, 4, 'Un piccolo regno insulare nel Golfo Persico.'),
('Bangladesh', 'BD', 'BD', 'BGD', 50, 1185247, 3, 147570.00, 164700000, 5, 'Uno dei paesi più densamente popolati del mondo.'),
('Bhutan', 'BT', 'BT', 'BTN', 64, 125263, 3, 38394.00, 807610, 6, 'Conosciuto per il suo approccio unico al benessere nazionale.'),
('Brunei', 'BN', 'BN', 'BRN', 96, 1820814, 3, 5765.00, 437483, 7, 'Un piccolo stato ricco di risorse nel sud-est asiatico.'),
('Cambogia', 'KH', 'KH', 'KHM', 116, 1831721, 3, 181035.00, 15400000, 8, 'Famosa per il sito archeologico di Angkor Wat.'),
('Cina', 'CN', 'CN', 'CHN', 156, 1814991, 3, 9596961.00, 1390000000, 9, 'Il paese più popoloso del mondo con una grande varietà culturale.'),
('Cipro', 'CY', 'CY', 'CYP', 196, 146669, 3, 9251.00, 1207359, 10, 'Un'isola nel Mediterraneo orientale con una lunga storia.'),
('Georgia', 'GE', 'GE', 'GEO', 268, 614540, 3, 69700.00, 3980164, 11, 'Famosa per i suoi paesaggi montuosi.'),
('India', 'IN', 'IN', 'IND', 356, 1264527, 3, 3287263.00, 1393409038, 12, 'Un paese con una vasta diversità culturale e linguistica.'),
('Indonesia', 'ID', 'ID', 'IDN', 360, 1643086, 3, 1904569.00, 276361783, 13, 'Il più grande arcipelago del mondo.'),
('Iran', 'IR', 'IR', 'IRN', 364, 1282078, 3, 1648195.00, 85028700, 14, 'Conosciuto per la sua storia antica e la cultura persiana.'),
('Iraq', 'IQ', 'IQ', 'IRQ', 368, 992037, 3, 438317.00, 39300000, 15, 'Famoso per la sua storia antica e i conflitti moderni.'),
('Israele', 'IL', 'IL', 'ISR', 376, 293025, 3, 20770.00, 8520000, 16, 'Un paese con una lunga storia religiosa e culturale.'),
('Giappone', 'JP', 'JP', 'JPN', 392, 1861060, 3, 377973.00, 126000000, 17, 'Conosciuto per la sua tecnologia avanzata e cultura unica.'),
('Giordania', 'JO', 'JO', 'JOR', 400, 248781, 3, 89342.00, 10500000, 18, 'Famosa per Petra e il deserto di Wadi Rum.'),
('Kazakhstan', 'KZ', 'KZ', 'KAZ', 398, 1526000, 3, 2724900.00, 18700000, 19, 'Il paese più grande dell\'Asia centrale.'),
('Kuwait', 'KW', 'KW', 'KWT', 414, 285570, 3, 17818.00, 4146900, 20, 'Un piccolo stato ricco di petrolio nel Golfo Persico.'),
('Laos', 'LA', 'LA', 'LAO', 418, 165782, 3, 236800.00, 7020000, 21, 'Conosciuto per le sue montagne e i templi.'),
('Libano', 'LB', 'LB', 'LBN', 422, 272632, 3, 10452.00, 6840000, 22, 'Conosciuto per la sua storia antica e la sua cucina.'),
('Malaysia', 'MY', 'MY', 'MYS', 458, 1735161, 3, 330803.00, 32500000, 23, 'Famosa per le sue isole e la cultura multiculturale.'),
('Maldivas', 'MV', 'MV', 'MDV', 462, 1282028, 3, 298.00, 427756, 24, 'Un arcipelago famoso per le sue spiagge.'),
('Mongolia', 'MN', 'MN', 'MNG', 496, 2028468, 3, 1564116.00, 3310000, 25, 'Conosciuto per le sue steppe e la cultura nomade.'),
('Myanmar', 'MM', 'MM', 'MMR', 104, 1293168, 3, 676578.00, 54100000, 26, 'Famoso per i suoi templi e la cultura buddista.'),
('Nepal', 'NP', 'NP', 'NPL', 524, 1282988, 3, 147516.00, 29800000, 27, 'Conosciuto per l\'Himalaya e il monte Everest.'),
('Oman', 'OM', 'OM', 'OMN', 512, 289040, 3, 309500.00, 2970000, 28, 'Conosciuto per i suoi paesaggi desertici e le tradizioni culturali.'),
('Pakistan', 'PK', 'PK', 'PAK', 586, 1168579, 3, 881913.00, 233500000, 29, 'Un paese con una ricca storia e diverse culture.'),
('Palestina', 'PS', 'PS', 'PSE', 275, 6252001, 3, 6220.00, 5000000, 30, 'Conosciuta per il suo conflitto storico e la sua importanza religiosa.'),
('Qatar', 'QA', 'QA', 'QAT', 634, 288567, 3, 11571.00, 2580000, 31, 'Famoso per la sua ricchezza petrolifera.'),
('Arabia Saudita', 'SA', 'SA', 'SAU', 682, 1023581, 3, 2149690.00, 33400000, 32, 'Conosciuta per la sua economia petrolifera e i luoghi sacri islamici.'),
('Singapore', 'SG', 'SG', 'SGP', 702, 1880251, 3, 710.00, 5700000, 33, 'Un importante hub finanziario e commerciale.'),
('Siria', 'SY', 'SY', 'SYR', 760, 163831, 3, 185180.00, 18900000, 34, 'Famosa per la sua storia antica e i conflitti moderni.'),
('Sri Lanka', 'LK', 'LK', 'LKA', 144, 124761, 3, 65610.00, 22000000, 35, 'Conosciuto per le sue spiagge e il patrimonio culturale.'),
('Tagikistan', 'TJ', 'TJ', 'TJK', 762, 122040, 3, 143100.00, 8900000, 36, 'Conosciuto per le sue montagne e la cultura.'),
('Thailandia', 'TH', 'TH', 'THA', 764, 1151194, 3, 513120.00, 69000000, 37, 'Famosa per le sue spiagge e la cultura buddista.'),
('Timor Est', 'TL', 'TL', 'TLS', 626, 1250817, 3, 15007.00, 1340000, 38, 'Un piccolo paese nell\'Asia sud-orientale.'),
('Turchia', 'TR', 'TR', 'TUR', 792, 745037, 3, 783562.00, 86000000, 39, 'Un paese che collega Europa e Asia con una lunga storia.'),
('Turkmenistan', 'TM', 'TM', 'TKM', 795, 1217270, 3, 488100.00, 5500000, 40, 'Conosciuto per le sue risorse naturali e le steppe.'),
('Emirati Arabi Uniti', 'AE', 'AE', 'ARE', 784, 292207, 3, 83600.00, 9030000, 41, 'Famoso per le sue città moderne e l\'economia petrolifera.'),
('Uzbekistan', 'UZ', 'UZ', 'UZB', 860, 1519064, 3, 448978.00, 34850000, 42, 'Conosciuto per la sua storia culturale e le città storiche.'),
('Vietnam', 'VN', 'VN', 'VNM', 704, 1562822, 3, 331210.00, 97300000, 43, 'Famoso per la sua storia e le bellezze naturali.'),
('Yemen', 'YE', 'YE', 'YEM', 887, 695666, 3, 527968.00, 29700000, 44, 'Conosciuto per la sua storia antica e le risorse naturali.');


INSERT INTO lmgc_Countries (name, code, iso_3166_1, iso_3166_2, m49_code, geoname_id, continent_id, surface_area, population, currency_id, description) VALUES
('Albania', 'AL', 'AL', 'ALB', 8, 783754, 4, 28748.00, 2877797, 1, 'Conosciuta per i suoi paesaggi montuosi e la storia.'),
('Andorra', 'AD', 'AD', 'AND', 20, 3041565, 4, 468.00, 78014, 2, 'Un piccolo principato nei Pirenei.'),
('Armenia', 'AM', 'AM', 'ARM', 51, 174982, 4, 29743.00, 2963243, 3, 'Famoso per la sua storia e cultura antica.'),
('Austria', 'AT', 'AT', 'AUT', 40, 276136, 4, 83871.00, 8917205, 4, 'Conosciuta per la sua cultura musicale e alpina.'),
('Azerbaijan', 'AZ', 'AZ', 'AZE', 31, 587940, 4, 86600.00, 9720000, 5, 'Conosciuta per la sua storia e le risorse energetiche.'),
('Belgio', 'BE', 'BE', 'BEL', 56, 2802361, 4, 30528.00, 11589623, 6, 'Famoso per la sua architettura e cioccolato.'),
('Bosnia ed Erzegovina', 'BA', 'BA', 'BIH', 70, 327760, 4, 51209.00, 3280000, 7, 'Conosciuta per la sua storia complessa e il paesaggio montuoso.'),
('Bulgaria', 'BG', 'BG', 'BGR', 100, 732800, 4, 110879.00, 6951482, 8, 'Famosa per le sue risorse naturali e cultura storica.'),
('Cipro', 'CY', 'CY', 'CYP', 196, 146669, 4, 9251.00, 1207359, 9, 'Un’isola con una lunga storia e cultura.'),
('Croazia', 'HR', 'HR', 'HRV', 191, 321150, 4, 56594.00, 4105267, 10, 'Conosciuta per le sue spiagge e storia.'),
('Danemarca', 'DK', 'DK', 'DNK', 208, 2618425, 4, 42934.00, 5806000, 11, 'Famosa per il suo design e la qualità della vita.'),
('Estonia', 'EE', 'EE', 'EST', 233, 591299, 4, 45227.00, 1326535, 12, 'Conosciuta per le sue foreste e cultura digitale.'),
('Finlandia', 'FI', 'FI', 'FIN', 246, 660013, 4, 338424.00, 5540720, 13, 'Famosa per i suoi paesaggi naturali e benessere.'),
('Francia', 'FR', 'FR', 'FRA', 250, 2988507, 4, 551695.00, 67000000, 14, 'Conosciuta per la sua cultura, storia e gastronomia.'),
('Georgia', 'GE', 'GE', 'GEO', 268, 614540, 4, 69700.00, 3980164, 15, 'Famosa per i suoi paesaggi montuosi e la storia.'),
('Germania', 'DE', 'DE', 'DEU', 276, 2921044, 4, 357022.00, 83783942, 16, 'Conosciuta per la sua economia e cultura.'),
('Grecia', 'GR', 'GR', 'GRC', 300, 390905, 4, 131957.00, 10423054, 17, 'Famosa per la sua storia antica e le isole.'),
('Islanda', 'IS', 'IS', 'ISL', 352, 263842, 4, 103000.00, 366130, 18, 'Conosciuta per i suoi paesaggi vulcanici e geotermici.'),
('Irlanda', 'IE', 'IE', 'IRL', 372, 296457, 4, 70273.00, 4937786, 19, 'Famosa per la sua natura verde e la cultura musicale.'),
('Italia', 'IT', 'IT', 'ITA', 380, 316907, 4, 301340.00, 60244640, 20, 'Conosciuta per la sua storia, arte e cucina.'),
('Kazakistan', 'KZ', 'KZ', 'KAZ', 398, 1526000, 4, 2724900.00, 18700000, 21, 'Conosciuto per le sue steppe e risorse naturali.'),
('Kosovo', 'XK', 'XK', 'XKX', 383, 6184886, 4, 10908.00, 1830000, 22, 'Un paese con una recente storia di indipendenza.'),
('Latvia', 'LV', 'LV', 'LVA', 428, 258200, 4, 64559.00, 1886200, 23, 'Conosciuta per le sue foreste e città storiche.'),
('Liechtenstein', 'LI', 'LI', 'LIE', 438, 3041282, 4, 160.00, 38128, 24, 'Un piccolo principato con una forte economia.'),
('Lituania', 'LT', 'LT', 'LTU', 440, 598253, 4, 65200.00, 2722289, 25, 'Conosciuta per le sue città storiche e paesaggi naturali.'),
('Lussemburgo', 'LU', 'LU', 'LUX', 442, 2968815, 4, 2586.00, 634814, 26, 'Famoso per la sua economia e qualità della vita.'),
('Malta', 'MT', 'MT', 'MLT', 470, 2563087, 4, 316.00, 514999, 27, 'Conosciuta per le sue isole e la storia.'),
('Moldova', 'MD', 'MD', 'MDA', 498, 617790, 4, 33846.00, 2657637, 28, 'Conosciuta per la sua cultura e paesaggi.'),
('Monaco', 'MC', 'MC', 'MCO', 492, 2993457, 4, 2.00, 39242, 29, 'Un piccolo stato famoso per il suo lusso.'),
('Montenegro', 'ME', 'ME', 'MNE', 499, 3194886, 4, 13812.00, 622209, 30, 'Conosciuto per le sue coste e montagne.'),
('Norvegia', 'NO', 'NO', 'NOR', 578, 645099, 4, 148729.00, 5421241, 31, 'Famosa per i suoi fiordi e paesaggi naturali.'),
('Paesi Bassi', 'NL', 'NL', 'NLD', 528, 2750405, 4, 41543.00, 17134800, 32, 'Conosciuto per i suoi canali e mulini a vento.'),
('Polonia', 'PL', 'PL', 'POL', 616, 798544, 4, 312696.00, 38386000, 33, 'Famosa per la sua storia e le città storiche.'),
('Portogallo', 'PT', 'PT', 'PRT', 620, 2262027, 4, 92090.00, 10196709, 34, 'Conosciuto per le sue spiagge e cultura.'),
('Romania', 'RO', 'RO', 'ROU', 642, 683506, 4, 238397.00, 19237691, 35, 'Famosa per i suoi castelli e paesaggi naturali.'),
('San Marino', 'SM', 'SM', 'SMR', 674, 831310, 4, 61.00, 33931, 36, 'Un piccolo stato con una lunga storia.'),
('Serbia', 'RS', 'RS', 'SRB', 688, 629634, 4, 77474.00, 7018000, 37, 'Conosciuta per la sua storia e cultura.'),
('Slovacchia', 'SK', 'SK', 'SVK', 703, 723716, 4, 49035.00, 5479600, 38, 'Famosa per i suoi paesaggi montuosi e città storiche.'),
('Slovenia', 'SI', 'SI', 'SVN', 705, 3194805, 4, 20273.00, 2078650, 39, 'Conosciuta per la sua bellezza naturale e culturale.'),
('Spagna', 'ES', 'ES', 'ESP', 724, 2510726, 4, 505992.00, 46900000, 40, 'Famosa per la sua cultura e le sue spiagge.'),
('Svezia', 'SE', 'SE', 'SWE', 752, 2661886, 4, 450295.00, 10100000, 41, 'Conosciuta per i suoi paesaggi naturali e benessere.'),
('Svizzera', 'CH', 'CH', 'CHE', 756, 2657896, 4, 41285.00, 8687062, 42, 'Famosa per le sue montagne e la qualità della vita.'),
('Turchia', 'TR', 'TR', 'TUR', 792, 745037, 4, 783562.00, 86000000, 43, 'Un paese che si estende tra Europa e Asia.'),
('Ucraina', 'UA', 'UA', 'UKR', 804, 690437, 4, 603550.00, 43900000, 44, 'Famosa per la sua storia e le sue città storiche.'),
('Vaticano', 'VA', 'VA', 'VAT', 336, 298832, 4, 0.49, 800, 45, 'Il più piccolo stato indipendente al mondo.');

INSERT INTO lmgc_Countries (name, code, iso_3166_1, iso_3166_2, m49_code, geoname_id, continent_id, surface_area, population, currency_id, description) VALUES
('Antigua e Barbuda', 'AG', 'AG', 'ATG', 28, 3578096, 5, 442.00, 98000, 1, 'Un piccolo arcipelago nei Caraibi.'),
('Bahamas', 'BS', 'BS', 'BHS', 44, 3572391, 5, 13943.00, 400516, 2, 'Famoso per le sue spiagge e isole.'),
('Barbados', 'BB', 'BB', 'BRB', 52, 3374084, 5, 430.00, 285000, 3, 'Conosciuto per le sue spiagge e cultura.'),
('Belize', 'BZ', 'BZ', 'BLZ', 84, 3582394, 5, 22966.00, 421000, 4, 'Famoso per la barriera corallina e le rovine maya.'),
('Canada', 'CA', 'CA', 'CAN', 124, 6252001, 5, 9976140.00, 382000000, 5, 'Il secondo paese più grande del mondo.'),
('Costa Rica', 'CR', 'CR', 'CRI', 188, 3624060, 5, 51100.00, 5290000, 6, 'Famoso per la sua biodiversità e il turismo ecologico.'),
('Cuba', 'CU', 'CU', 'CUB', 192, 3553468, 5, 109884.00, 11300000, 7, 'Conosciuta per la sua cultura e storia rivoluzionaria.'),
('Dominica', 'DM', 'DM', 'DMA', 212, 3576912, 5, 754.00, 73000, 8, 'Un’isola con paesaggi naturali e culturali unici.'),
('Repubblica Dominicana', 'DO', 'DO', 'DOM', 214, 3508796, 5, 48730.00, 11000000, 9, 'Famosa per le sue spiagge e la cultura.'),
('El Salvador', 'SV', 'SV', 'SLV', 222, 3583364, 5, 21041.00, 6410000, 10, 'Conosciuto per la sua storia e le spiagge.'),
('Granada', 'GD', 'GD', 'GRD', 308, 3578439, 5, 344.00, 110000, 11, 'Un’isola con una storia coloniale e paesaggi naturali.'),
('Guatemala', 'GT', 'GT', 'GTM', 320, 3585968, 5, 108889.00, 18600000, 12, 'Famoso per le rovine maya e la cultura indigena.'),
('Haiti', 'HT', 'HT', 'HTI', 332, 3728294, 5, 27750.00, 11400000, 13, 'Conosciuto per la sua storia e la cultura unica.'),
('Honduras', 'HN', 'HN', 'HND', 340, 3608932, 5, 112492.00, 9920000, 14, 'Famoso per le sue rovine e bellezze naturali.'),
('Jamaica', 'JM', 'JM', 'JAM', 388, 3480898, 5, 10991.00, 2900000, 15, 'Conosciuta per la sua musica e cultura.'),
('Messico', 'MX', 'MX', 'MEX', 484, 3996063, 5, 1964375.00, 127000000, 16, 'Famoso per la sua storia antica e la cucina.'),
('Nicaragua', 'NI', 'NI', 'NIC', 558, 3617476, 5, 130373.00, 6600000, 17, 'Conosciuto per i suoi laghi e vulcani.'),
('Panama', 'PA', 'PA', 'PAN', 591, 3703431, 5, 75417.00, 4700000, 18, 'Famoso per il canale di Panama.'),
('Saint Kitts e Nevis', 'KN', 'KN', 'KNA', 659, 3575177, 5, 261.00, 53000, 19, 'Un’isola con bellezze naturali e storiche.'),
('Saint Lucia', 'LC', 'LC', 'LCA', 662, 3582500, 5, 616.00, 200000, 20, 'Conosciuta per le sue bellezze naturali e la cultura.'),
('Saint Vincent e Grenadine', 'VC', 'VC', 'VCT', 670, 3577718, 5, 389.00, 110000, 21, 'Un’isola con paesaggi naturali e cultura.'),
('Trinidad e Tobago', 'TT', 'TT', 'TTO', 780, 3576902, 5, 5128.00, 1400000, 22, 'Famoso per la sua musica e cultura.'),
('USA', 'US', 'US', 'USA', 840, 6252001, 5, 9372610.00, 331000000, 23, 'Il paese più potente del mondo con una grande diversità.');

INSERT INTO lmgc_Countries (name, code, iso_3166_1, iso_3166_2, m49_code, geoname_id, continent_id, surface_area, population, currency_id, description) VALUES
('Australia', 'AU', 'AU', 'AUS', 36, 2077456, 6, 7692024.00, 25600000, 1, 'Il paese più grande dell’Oceania, famoso per la sua fauna unica.'),
('Figi', 'FJ', 'FJ', 'FJI', 242, 2208478, 6, 18274.00, 900000, 2, 'Conosciuto per le sue isole e paesaggi naturali.'),
('Kiribati', 'KI', 'KI', 'KIR', 296, 4032142, 6, 811.00, 120000, 3, 'Un paese con isole sparse nel Pacifico centrale.'),
('Isole Marshall', 'MH', 'MH', 'MHL', 584, 2080278, 6, 181.00, 53000, 4, 'Un paese insulare con una storia unica.'),
('Nauru', 'NR', 'NR', 'NRU', 520, 2110425, 6, 21.00, 12000, 5, 'Il terzo paese più piccolo del mondo con una ricca storia mineraria.'),
('Nuova Caledonia', 'NC', 'NC', 'NCL', 540, 2147727, 6, 18575.00, 290000, 6, 'Un territorio francese noto per la sua biodiversità.'),
('Palau', 'PW', 'PW', 'PLW', 585, 1580815, 6, 459.00, 23000, 7, 'Famoso per i suoi fondali marini e il turismo subacqueo.'),
('Papua Nuova Guinea', 'PG', 'PG', 'PNG', 598, 2146220, 6, 462840.00, 9000000, 8, 'Conosciuta per la sua biodiversità e cultura unica.'),
('Samoa', 'WS', 'WS', 'WSM', 882, 4033988, 6, 2842.00, 200000, 9, 'Famosa per la sua cultura polinesiana e paesaggi naturali.'),
('Tonga', 'TO', 'TO', 'TON', 776, 4032280, 6, 748.00, 100000, 10, 'Un’isola con una cultura polinesiana unica.'),
('Tuvalu', 'TV', 'TV', 'TUV', 798, 2110295, 6, 26.00, 12000, 11, 'Un paese insulare con una bassa elevazione.'),
('Vanuatu', 'VU', 'VU', 'VUT', 548, 2135506, 6, 12200.00, 300000, 12, 'Famoso per le sue isole e la cultura melanesiana.');

INSERT INTO lmgc_Countries (name, code, iso_3166_1, iso_3166_2, m49_code, geoname_id, continent_id, surface_area, population, currency_id, description) VALUES
('Argentina', 'AR', 'AR', 'ARG', 032, 3865483, 7, 2780400.00, 45195777, 1, 'Conosciuta per la sua cultura del tango e paesaggi variegati.'),
('Bolivia', 'BO', 'BO', 'BOL', 068, 3923057, 7, 1098580.00, 11400000, 2, 'Famosa per le sue risorse minerarie e la cultura indigena.'),
('Brasile', 'BR', 'BR', 'BRA', 076, 3469034, 7, 8515767.00, 213993000, 3, 'Il più grande paese del Sud America, noto per la Foresta Amazzonica e il carnevale di Rio.'),
('Cile', 'CL', 'CL', 'CHL', 152, 3895114, 7, 756102.00, 19100000, 4, 'Famoso per la sua lunga costa e i paesaggi andini.'),
('Colombia', 'CO', 'CO', 'COL', 170, 3688689, 7, 1141748.00, 53000000, 5, 'Conosciuta per la sua biodiversità e le caffetterie.'),
('Ecuador', 'EC', 'EC', 'ECU', 218, 3658394, 7, 283561.00, 17400000, 6, 'Famoso per le isole Galápagos e la biodiversità.'),
('Guyana', 'GY', 'GY', 'GUY', 328, 3378536, 7, 214969.00, 790000, 7, 'Conosciuta per le sue riserve naturali e la cultura multiculturale.'),
('Paraguay', 'PY', 'PY', 'PRY', 600, 343759, 7, 406750.00, 7150000, 8, 'Famosa per la sua storia e i fiumi che attraversano il paese.'),
('Perù', 'PE', 'PE', 'PER', 604, 3932488, 7, 1285216.00, 35000000, 9, 'Conosciuto per le rovine di Machu Picchu e la cultura Inca.'),
('Suriname', 'SR', 'SR', 'SUR', 740, 3385676, 7, 163820.00, 600000, 10, 'Famoso per le sue foreste pluviali e la diversità culturale.'),
('Uruguay', 'UY', 'UY', 'URY', 858, 3439705, 7, 176215.00, 3500000, 11, 'Conosciuto per le sue spiagge e la qualità della vita.'),
('Venezuela', 'VE', 'VE', 'VEN', 862, 3629648, 7, 912050.00, 28000000, 12, 'Famoso per le sue riserve di petrolio e la bellezza naturale.');
*/
