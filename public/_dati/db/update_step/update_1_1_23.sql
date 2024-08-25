CREATE TABLE IF NOT EXISTS InofProfileTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    plan INT NOT NULL,
    idProfileTypes INT NOT NULL,
    description VARCHAR(255) NOT NULL,
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 1,  'GRATUITO', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 1,  '', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 1,  '$0.00', 'titolo');

-----

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 2,   'LIV. 1', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 2,   '', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 2,   '$9.99', 'titolo');

-----

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 3,   'LIV. 2', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 3,   '', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (1, 3,   '$19.99', 'titolo');

-----------------------------

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 1,  'PICCOLA', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 1,  '', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 1,  '$49.99', 'titolo');

-----

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 2,  'MEDIA', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 2,  '', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 2,  '$69.99', 'titolo');

-----

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 3,  'GRANDE', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 3,  '', 'titolo');

INSERT INTO InfoProfileTypes (idProfileTypes, plan,description, notes)
VALUES (2, 3,  '$99.99', 'titolo');