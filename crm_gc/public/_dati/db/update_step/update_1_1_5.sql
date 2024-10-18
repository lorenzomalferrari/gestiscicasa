CREATE TABLE IF NOT EXISTS lm_Brand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country_of_origin_id INT,
    industry_sector_id INT,
    foundation_year INT,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (country_of_origin_id) REFERENCES lm_Countries(id),
    FOREIGN KEY (industry_sector_id) REFERENCES lm_IndustrySectors(id)
);

INSERT INTO Brand (name, country_of_origin_id, industry_sector_id, foundation_year, notes)
VALUES ('Nike', 1, 2, 1964, 'Famoso marchio di abbigliamento sportivo');
