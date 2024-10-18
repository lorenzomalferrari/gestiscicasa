CREATE TABLE IF NOT EXISTS lm_Rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    number INT,
    name VARCHAR(255) NOT NULL,
    usage_destination_id INT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    notes TEXT,
    color_id INT,
    property_id INT,
    room_types_id INT,
    FOREIGN KEY (usage_destination_id) REFERENCES lm_UsageDestinations(id),
    FOREIGN KEY (color_id) REFERENCES lm_Colors(id),
    FOREIGN KEY (property_id) REFERENCES lm_Properties(id),
    FOREIGN KEY (room_types_id) REFERENCES lm_RoomTypess(id)
);

ALTER TABLE lm_Rooms
ADD CONSTRAINT FK_Rooms_UsageDestinations FOREIGN KEY (usage_destination_id) REFERENCES lm_UsageDestinations(id),
ADD CONSTRAINT FK_Rooms_Colors FOREIGN KEY (color_id) REFERENCES lm_Colors(id),
ADD CONSTRAINT FK_Rooms_Properties FOREIGN KEY (property_id) REFERENCES lm_Properties(id),
ADD CONSTRAINT FK_Rooms_RoomTypess FOREIGN KEY (room_types_id) REFERENCES lm_RoomTypess(id);

ALTER TABLE lm_Rooms
ADD CONSTRAINT FK_Rooms_UsageDestinations FOREIGN KEY (usage_destination_id) REFERENCES lm_UsageDestinations(id),
ADD CONSTRAINT FK_Rooms_Colors FOREIGN KEY (color_id) REFERENCES lm_Colors(id),
ADD CONSTRAINT FK_Rooms_Properties FOREIGN KEY (property_id) REFERENCES lm_Properties(id),
ADD CONSTRAINT FK_Rooms_RoomTypess FOREIGN KEY (room_types_id) REFERENCES lm_RoomTypess(id);

-- Inserimento della stanza "Soggiorno"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 1, 'Soggiorno', 1, 'Descrizione del soggiorno', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Soggiorno'
) LIMIT 1;

-- Inserimento della stanza "Ingresso"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 2, 'Ingresso', 1, 'Descrizione di ingresso', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Ingresso'
) LIMIT 1;

-- Inserimento della stanza "Cucina"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 3, 'Cucina', 1, 'Descrizione della cucina', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Cucina'
) LIMIT 1;

-- Inserimento della stanza "Camera da letto"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 4, 'Camera da letto', 1, 'Descrizione della camera da letto', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Camera da letto'
) LIMIT 1;

-- Inserimento della stanza "Giardino"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 5, 'Giardino', 1, 'Descrizione del giardino', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Giardino'
) LIMIT 1;

-- Inserimento della stanza "Sgabuzzino"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 6, 'Sgabuzzino', 1, 'Descrizione dello sgabuzzino', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Sgabuzzino'
) LIMIT 1;

-- Inserimento della stanza "Garage"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 7, 'Garage', 1, 'Descrizione del garage', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Garage'
) LIMIT 1;

-- Inserimento della stanza "Cantina"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 8, 'Cantina', 1, 'Descrizione della cantina', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Cantina'
) LIMIT 1;

-- Inserimento della stanza "Terrazza"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 9, 'Terrazza', 1, 'Descrizione della terrazza', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Terrazza'
) LIMIT 1;

-- Inserimento della stanza "Altro"
INSERT INTO lm_Rooms (number, name, usage_destination_id, notes, color_id, property_id, room_types_id)
SELECT * FROM (SELECT 10, 'Altro', 1, 'Descrizione di un altro tipo di stanza', 1, 1, 1) AS tmp
WHERE NOT EXISTS (
    SELECT * FROM lm_Rooms WHERE name = 'Altro'
) LIMIT 1;

ALTER TABLE lm_Rooms
ADD COLUMN name_en VARCHAR(255) AFTER name,
ADD COLUMN name_fr VARCHAR(255) AFTER name_en,
ADD COLUMN name_de VARCHAR(255) AFTER name_fr,
ADD COLUMN name_es VARCHAR(255) AFTER name_de,
ADD COLUMN name_pt VARCHAR(255) AFTER name_es;

-- Aggiornamento dei nomi delle stanze in inglese
UPDATE lm_Rooms SET name_en = 'Living Room' WHERE name = 'Soggiorno';
UPDATE lm_Rooms SET name_en = 'Entrance' WHERE name = 'Ingresso';
UPDATE lm_Rooms SET name_en = 'Kitchen' WHERE name = 'Cucina';
UPDATE lm_Rooms SET name_en = 'Bedroom' WHERE name = 'Camera da letto';
UPDATE lm_Rooms SET name_en = 'Garden' WHERE name = 'Giardino';
UPDATE lm_Rooms SET name_en = 'Storage Room' WHERE name = 'Sgabuzzino';
UPDATE lm_Rooms SET name_en = 'Garage' WHERE name = 'Garage';
UPDATE lm_Rooms SET name_en = 'Cellar' WHERE name = 'Cantina';
UPDATE lm_Rooms SET name_en = 'Terrace' WHERE name = 'Terrazza';
UPDATE lm_Rooms SET name_en = 'Other' WHERE name = 'Altro';

-- Aggiornamento dei nomi delle stanze in francese
UPDATE lm_Rooms SET name_fr = 'Salon' WHERE name = 'Soggiorno';
UPDATE lm_Rooms SET name_fr = 'Entrée' WHERE name = 'Ingresso';
UPDATE lm_Rooms SET name_fr = 'Cuisine' WHERE name = 'Cucina';
UPDATE lm_Rooms SET name_fr = 'Chambre' WHERE name = 'Camera da letto';
UPDATE lm_Rooms SET name_fr = 'Jardin' WHERE name = 'Giardino';
UPDATE lm_Rooms SET name_fr = 'Débarras' WHERE name = 'Sgabuzzino';
UPDATE lm_Rooms SET name_fr = 'Garage' WHERE name = 'Garage';
UPDATE lm_Rooms SET name_fr = 'Cave' WHERE name = 'Cantina';
UPDATE lm_Rooms SET name_fr = 'Terrasse' WHERE name = 'Terrazza';
UPDATE lm_Rooms SET name_fr = 'Autre' WHERE name = 'Altro';

-- Aggiornamento dei nomi delle stanze in tedesco
UPDATE lm_Rooms SET name_de = 'Wohnzimmer' WHERE name = 'Soggiorno';
UPDATE lm_Rooms SET name_de = 'Eingang' WHERE name = 'Ingresso';
UPDATE lm_Rooms SET name_de = 'Küche' WHERE name = 'Cucina';
UPDATE lm_Rooms SET name_de = 'Schlafzimmer' WHERE name = 'Camera da letto';
UPDATE lm_Rooms SET name_de = 'Garten' WHERE name = 'Giardino';
UPDATE lm_Rooms SET name_de = 'Abstellraum' WHERE name = 'Sgabuzzino';
UPDATE lm_Rooms SET name_de = 'Garage' WHERE name = 'Garage';
UPDATE lm_Rooms SET name_de = 'Keller' WHERE name = 'Cantina';
UPDATE lm_Rooms SET name_de = 'Terrasse' WHERE name = 'Terrazza';
UPDATE lm_Rooms SET name_de = 'Andere' WHERE name = 'Altro';

-- Aggiornamento dei nomi delle stanze in spagnolo
UPDATE lm_Rooms SET name_es = 'Sala de estar' WHERE name = 'Soggiorno';
UPDATE lm_Rooms SET name_es = 'Entrada' WHERE name = 'Ingresso';
UPDATE lm_Rooms SET name_es = 'Cocina' WHERE name = 'Cucina';
UPDATE lm_Rooms SET name_es = 'Dormitorio' WHERE name = 'Camera da letto';
UPDATE lm_Rooms SET name_es = 'Jardín' WHERE name = 'Giardino';
UPDATE lm_Rooms SET name_es = 'Trastero' WHERE name = 'Sgabuzzino';
UPDATE lm_Rooms SET name_es = 'Garaje' WHERE name = 'Garage';
UPDATE lm_Rooms SET name_es = 'Bodega' WHERE name = 'Cantina';
UPDATE lm_Rooms SET name_es = 'Terraza' WHERE name = 'Terrazza';
UPDATE lm_Rooms SET name_es = 'Otro' WHERE name = 'Altro';

-- Aggiornamento dei nomi delle stanze in portoghese
UPDATE lm_Rooms SET name_pt = 'Sala de Estar' WHERE name = 'Soggiorno';
UPDATE lm_Rooms SET name_pt = 'Entrada' WHERE name = 'Ingresso';
UPDATE lm_Rooms SET name_pt = 'Cozinha' WHERE name = 'Cucina';
UPDATE lm_Rooms SET name_pt = 'Quarto' WHERE name = 'Camera da letto';
UPDATE lm_Rooms SET name_pt = 'Jardim' WHERE name = 'Giardino';
UPDATE lm_Rooms SET name_pt = 'Despensa' WHERE name = 'Sgabuzzino';
UPDATE lm_Rooms SET name_pt = 'Garagem' WHERE name = 'Garage';
UPDATE lm_Rooms SET name_pt = 'Cave' WHERE name = 'Cantina';
UPDATE lm_Rooms SET name_pt = 'Terraço' WHERE name = 'Terrazza';
UPDATE lm_Rooms SET name_pt = 'Outro' WHERE name = 'Altro';
