CREATE TABLE IF NOT EXISTS lmgc_Brand (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country_of_origin INT,
    industry_sector INT,
    foundation_year INT,
    note TEXT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (country_of_origin) REFERENCES lmgc_Countries(id),
    FOREIGN KEY (industry_sector) REFERENCES lmgc_IndustrySectors(id)
);

INSERT INTO Brand (name, country_of_origin, industry_sector, foundation_year, note)
VALUES ('Nike', 1, 2, 1964, 'Famoso marchio di abbigliamento sportivo');
