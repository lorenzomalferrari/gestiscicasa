DELETE FROM lmgc_PropertyTypes;

-- Tabella delle categorie dei tipi di proprietà
CREATE TABLE IF NOT EXISTS lmgc_PropertyTypesCategories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(50) NOT NULL,
    notes TEXT,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabella dei tipi di proprietà
CREATE TABLE IF NOT EXISTS lmgc_PropertyTypes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    category_id INT,
    notes TEXT,
    createDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES lmgc_PropertyTypesCategories(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO lmgc_PropertyTypesCategories (category) VALUES
    ('residential'),
    ('commercial'),
    ('industrial'),
    ('agricultural'),
    ('tourist'),
    ('land');

INSERT INTO lmgc_PropertyTypes (name, category_id, notes)
VALUES
    ('apartment', 1, NULL),
    ('villa', 1, NULL),
    ('townhouse', 1, NULL),
    ('studio', 1, NULL),
    ('office', 2, NULL),
    ('store', 2, NULL),
    ('warehouse', 2, NULL),
    ('factory', 3, NULL),
    ('depot', 3, NULL),
    ('farm', 4, NULL),
    ('vineyard', 4, NULL),
    ('hotel', 5, NULL),
    ('bed and breakfast', 5, NULL),
    ('buildable land', 6, NULL),
    ('agricultural land', 6, NULL);
