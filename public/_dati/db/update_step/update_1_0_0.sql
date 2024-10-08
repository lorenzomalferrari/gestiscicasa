CREATE TABLE IF NOT EXISTS lmgc_Countries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    continent_id INT NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (continent_id) REFERENCES lmgc_Continents(id)
);

-- AFRICA
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Algeria', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Angola', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Benin', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Botswana', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Burkina Faso', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Burundi', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Cabo Verde', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Cameroon', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Central African Republic', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Chad', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Comoros', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Congo, Democratic Republic of the', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Congo, Republic of the', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Djibouti', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Egypt', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Equatorial Guinea', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Eritrea', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Eswatini', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Ethiopia', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Gabon', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Gambia', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Ghana', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Guinea', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Guinea-Bissau', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Ivory Coast', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Kenya', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Lesotho', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Liberia', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Libya', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Madagascar', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Malawi', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Mali', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Mauritania', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Mauritius', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Morocco', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Mozambique', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Namibia', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Niger', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Nigeria', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Rwanda', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Sao Tome and Principe', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Senegal', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Seychelles', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Sierra Leone', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Somalia', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('South Africa', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('South Sudan', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Sudan', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Tanzania', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Togo', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Tunisia', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Uganda', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Zambia', 1);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Zimbabwe', 1);

--ASIA
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Afghanistan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Armenia', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Azerbaijan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Bahrain', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Bangladesh', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Bhutan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Brunei', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Cambodia', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('China', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Cyprus', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Georgia', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('India', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Indonesia', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Iran', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Iraq', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Israel', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Japan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Jordan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Kazakhstan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Kuwait', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Kyrgyzstan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Laos', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Lebanon', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Malaysia', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Maldives', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Mongolia', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Myanmar', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Nepal', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('North Korea', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Oman', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Pakistan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Palestine', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Philippines', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Qatar', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Saudi Arabia', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Singapore', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('South Korea', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Sri Lanka', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Syria', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Taiwan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Tajikistan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Thailand', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Timor-Leste', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Turkey', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Turkmenistan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('United Arab Emirates', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Uzbekistan', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Vietnam', 3);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Yemen', 3);

--INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Albania', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Andorra', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Austria', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Belarus', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Belgium', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Bosnia and Herzegovina', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Bulgaria', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Croatia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Cyprus', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Czech Republic', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Denmark', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Estonia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Finland', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('France', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Georgia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Germany', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Greece', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Hungary', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Iceland', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Ireland', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Italy', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Kosovo', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Latvia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Liechtenstein', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Lithuania', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Luxembourg', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Malta', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Moldova', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Monaco', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Montenegro', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Netherlands', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('North Macedonia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Norway', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Poland', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Portugal', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Romania', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Russia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('San Marino', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Serbia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Slovakia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Slovenia', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Spain', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Sweden', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Switzerland', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Ukraine', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('United Kingdom', 4);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Vatican City', 4);

-- NORD AMERICA
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Antigua and Barbuda', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Bahamas', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Barbados', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Belize', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Canada', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Costa Rica', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Cuba', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Dominica', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Dominican Republic', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('El Salvador', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Grenada', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Guatemala', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Haiti', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Honduras', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Jamaica', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Mexico', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Nicaragua', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Panama', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Saint Kitts and Nevis', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Saint Lucia', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Saint Vincent and the Grenadines', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Trinidad and Tobago', 5);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('United States', 5);

--
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Australia', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Fiji', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Kiribati', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Marshall Islands', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Micronesia', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Nauru', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('New Zealand', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Palau', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Papua New Guinea', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Samoa', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Solomon Islands', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Tonga', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Tuvalu', 6);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Vanuatu', 6);

--
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Argentina', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Bolivia', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Brazil', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Chile', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Colombia', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Ecuador', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Guyana', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Paraguay', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Peru', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Suriname', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Uruguay', 7);
INSERT INTO lmgc_Countries (name, continent_id) VALUES ('Venezuela', 7);
