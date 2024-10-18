CREATE TABLE IF NOT EXISTS lm_PaymentFrequencies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lm_PaymentFrequencies
    (name, description)
VALUES
    ('Giornaliero', 'Pagamento ogni giorno'),
    ('Settimanale', 'Pagamento ogni settimana'),
    ('Mensile', 'Pagamento ogni mese'),
    ('Bimensile', 'Pagamento ogni due mesi'),
    ('Trimestrale', 'Pagamento ogni tre mesi'),
    ('Quadrimestrale', 'Pagamento ogni quattro mesi'),
    ('Semestrale', 'Pagamento ogni sei mesi'),
    ('Annuale', 'Pagamento una volta anno'),
    ('Biennale', 'Pagamento ogni due anni'),
    ('Triennale', 'Pagamento ogni tre anni'),
    ('Quinquennale', 'Pagamento ogni cinque anni'),
    ('Decennale', 'Pagamento ogni dieci anni');

CREATE TABLE IF NOT EXISTS lm_SubscriptionTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    duration INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    payment_frequency_id INT,
    brand_id INT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data e ora di creazione
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Data e ora dell'ultimo aggiornamento
    FOREIGN KEY (payment_frequency_id) REFERENCES lm_PaymentFrequencies(id), -- Chiave esterna per la frequenza di pagamento
    FOREIGN KEY (brand_id) REFERENCES lm_Brand(id) -- Chiave esterna per il marchio
);

CREATE TABLE IF NOT EXISTS lm_SubscriptionStatuses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lm_SubscriptionStatuses (name, description)
SELECT * FROM (SELECT
    'Attivo', 'L\'abbonamento è attualmente attivo e valido.'
) AS tmp
WHERE NOT EXISTS (
    SELECT 1 FROM lm_SubscriptionStatuses WHERE name = 'Attivo'
) LIMIT 1;

INSERT INTO lm_SubscriptionStatuses (name, description)
SELECT * FROM (SELECT
    'Scaduto', 'L\'abbonamento è scaduto e non è più valido.'
) AS tmp
WHERE NOT EXISTS (
    SELECT 1 FROM lm_SubscriptionStatuses WHERE name = 'Scaduto'
) LIMIT 1;

INSERT INTO lm_SubscriptionStatuses (name, description)
SELECT * FROM (SELECT
    'Sospeso', 'L\'abbonamento è attualmente sospeso e può essere riattivato.'
) AS tmp
WHERE NOT EXISTS (
    SELECT 1 FROM lm_SubscriptionStatuses WHERE name = 'Sospeso'
) LIMIT 1;

CREATE TABLE IF NOT EXISTS lm_Subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    person_id INT NOT NULL,
    subscription_type_id INT NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE,
    status_id INT NOT NULL,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (person_id) REFERENCES lm_People(id),
    FOREIGN KEY (subscription_type_id) REFERENCES lm_SubscriptionTypes(id),
    FOREIGN KEY (status_id) REFERENCES lm_SubscriptionStatuses(id)
);
