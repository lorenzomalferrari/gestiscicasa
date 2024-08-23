CREATE TABLE languages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code_2 CHAR(2) NOT NULL UNIQUE,
    code_3 CHAR(3) NOT NULL UNIQUE,
    code_639_3 CHAR(3) UNIQUE,
    name VARCHAR(255) NOT NULL,
    native_name VARCHAR(255),
    rtl BOOLEAN DEFAULT FALSE,
    region VARCHAR(255),
    iso_3166_alpha2 CHAR(2),
    iso_3166_alpha3 CHAR(3),
    currency_code CHAR(3),
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO languages (code_2, code_3, code_639_3, name, native_name, rtl, region, iso_3166_alpha2, iso_3166_alpha3, currency_code) VALUES
('en', 'eng', 'eng', 'English', 'English', FALSE, 'Worldwide', 'US', 'USA', 'USD'),
('zh', 'zho', 'zho', 'Chinese', '中文', FALSE, 'Asia', 'CN', 'CHN', 'CNY'),
('hi', 'hin', 'hin', 'Hindi', 'हिन्दी', FALSE, 'Asia', 'IN', 'IND', 'INR'),
('es', 'spa', 'spa', 'Spanish', 'Español', FALSE, 'Worldwide', 'ES', 'ESP', 'EUR'),
('ar', 'ara', 'ara', 'Arabic', 'العربية', TRUE, 'Middle East, Africa', 'SA', 'SAU', 'SAR'),
('bn', 'ben', 'ben', 'Bengali', 'বাংলা', FALSE, 'Asia', 'BD', 'BGD', 'BDT'),
('pt', 'por', 'por', 'Portuguese', 'Português', FALSE, 'Europe, South America', 'PT', 'PRT', 'EUR'),
('ru', 'rus', 'rus', 'Russian', 'Русский', FALSE, 'Europe, Asia', 'RU', 'RUS', 'RUB'),
('ja', 'jpn', 'jpn', 'Japanese', '日本語', FALSE, 'Asia', 'JP', 'JPN', 'JPY'),
('de', 'deu', 'deu', 'German', 'Deutsch', FALSE, 'Europe', 'DE', 'DEU', 'EUR'),
('fr', 'fra', 'fra', 'French', 'Français', FALSE, 'Europe, Africa', 'FR', 'FRA', 'EUR'),
('it', 'ita', 'ita', 'Italian', 'Italiano', FALSE, 'Europe', 'IT', 'ITA', 'EUR'),
('ko', 'kor', 'kor', 'Korean', '한국어', FALSE, 'Asia', 'KR', 'KOR', 'KRW'),
('tr', 'tur', 'tur', 'Turkish', 'Türkçe', FALSE, 'Europe, Asia', 'TR', 'TUR', 'TRY'),
('vi', 'vie', 'vie', 'Vietnamese', 'Tiếng Việt', FALSE, 'Asia', 'VN', 'VNM', 'VND'),
('fa', 'fas', 'fas', 'Persian', 'فارسی', TRUE, 'Middle East', 'IR', 'IRN', 'IRR'),
('th', 'tha', 'tha', 'Thai', 'ไทย', FALSE, 'Asia', 'TH', 'THA', 'THB'),
('pl', 'pol', 'pol', 'Polish', 'Polski', FALSE, 'Europe', 'PL', 'POL', 'PLN'),
('uk', 'ukr', 'ukr', 'Ukrainian', 'Українська', FALSE, 'Europe', 'UA', 'UKR', 'UAH'),
('ms', 'msa', 'msa', 'Malay', 'Bahasa Melayu', FALSE, 'Asia', 'MY', 'MYS', 'MYR');

CREATE TABLE supported_languages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    language_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    notes TEXT,
    isActive BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (language_id) REFERENCES languages(id) ON DELETE CASCADE
);

INSERT INTO supported_languages (language_id, name, isActive, notes) VALUES
(1, 'English', TRUE, 'Lingua di defualt'),
(2, 'Italian', TRUE, 'Lingua accettata'),
(3, 'French', FALSE, 'Attualmente lingua non supportata'),
(4, 'German', FALSE, 'Attualmente lingua non supportata'),
(5, 'Portuguese', FALSE, 'Attualmente lingua non supportata');

CREATE TABLE translations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    language_id INT NOT NULL,
    `key` VARCHAR(255) NOT NULL,
    value TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    notes TEXT,
    FOREIGN KEY (language_id) REFERENCES supported_languages(id) ON DELETE CASCADE,
    UNIQUE (language_id, `key`)
);




