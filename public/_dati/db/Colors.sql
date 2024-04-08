CREATE TABLE Colors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    hexCode VARCHAR(7) NOT NULL,
    rgbCode VARCHAR(12) NOT NULL,
    rgbaCode VARCHAR(16) NOT NULL,
    hslCode VARCHAR(12) NOT NULL,
    note VARCHAR(255),
    CONSTRAINT chk_hexCode CHECK (hexCode REGEXP '^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$'),
    CONSTRAINT chk_rgbCode CHECK (rgbCode REGEXP '^rgb\(\d{1,3},\s*\d{1,3},\s*\d{1,3}\)$'),
    CONSTRAINT chk_rgbaCode CHECK (rgbaCode REGEXP '^rgba\(\d{1,3},\s*\d{1,3},\s*\d{1,3},\s*(0(\.\d+)?|1(\.0+)?)\)$'),
    CONSTRAINT chk_hslCode CHECK (hslCode REGEXP '^hsl\(\d{1,3},\s*\d{1,3}%,\s*\d{1,3}%\)$')
);
