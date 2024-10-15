DELETE FROM lm_PropertyTypes;

-- Tabella delle categorie dei tipi di proprietà
CREATE TABLE IF NOT EXISTS lm_PropertyTypesCategories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category VARCHAR(50) NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabella dei tipi di proprietà
CREATE TABLE IF NOT EXISTS lm_PropertyTypes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    category_id INT,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES lm_PropertyTypesCategories(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO lm_PropertyTypesCategories (category) VALUES
    ('residential'),
    ('commercial'),
    ('industrial'),
    ('agricultural'),
    ('tourist'),
    ('land');

INSERT INTO lm_PropertyTypes (name, category_id, notes)
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
