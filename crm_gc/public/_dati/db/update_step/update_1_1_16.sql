CREATE TABLE IF NOT EXISTS lmgc_PaymentFrequencies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_it VARCHAR(255) NOT NULL, -- Nome della frequenza di pagamento in italiano
    description_it TEXT, -- Descrizione della frequenza di pagamento in italiano
    name_en VARCHAR(255), -- Nome della frequenza di pagamento in inglese
    description_en TEXT, -- Descrizione della frequenza di pagamento in inglese
    name_es VARCHAR(255), -- Nome della frequenza di pagamento in spagnolo
    description_es TEXT, -- Descrizione della frequenza di pagamento in spagnolo
    name_fr VARCHAR(255), -- Nome della frequenza di pagamento in francese
    description_fr TEXT, -- Descrizione della frequenza di pagamento in francese
    name_de VARCHAR(255), -- Nome della frequenza di pagamento in tedesco
    description_de TEXT, -- Descrizione della frequenza di pagamento in tedesco
    name_pt VARCHAR(255), -- Nome della frequenza di pagamento in portoghese
    description_pt TEXT, -- Descrizione della frequenza di pagamento in portoghese
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data di creazione, impostata automaticamente
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Data di modifica, aggiornata automaticamente
);

INSERT INTO lmgc_PaymentFrequencies
    (name_it, description_it, name_en, description_en, name_es, description_es, name_fr, description_fr, name_de, description_de, name_pt, description_pt) 
VALUES
    ('Giornaliero', 'Pagamento ogni giorno', 'Daily', 'Payment every day', 'Diario', 'Pago cada día', 'Quotidien', 'Paiement chaque jour', 'Täglich', 'Zahlung jeden Tag', 'Diário', 'Pagamento diário'),
    ('Settimanale', 'Pagamento ogni settimana', 'Weekly', 'Payment every week', 'Semanal', 'Pago cada semana', 'Hebdomadaire', 'Paiement chaque semaine', 'Wöchentlich', 'Zahlung jede Woche', 'Semanal', 'Pagamento semanal'),
    ('Mensile', 'Pagamento ogni mese', 'Monthly', 'Payment every month', 'Mensual', 'Pago cada mes', 'Mensuel', 'Paiement tous les mois', 'Monatlich', 'Zahlung jeden Monat', 'Mensal', 'Pagamento mensal'),
    ('Bimensile', 'Pagamento ogni due mesi', 'Bi-Monthly', 'Payment every two months', 'Bimestral', 'Pago cada dos meses', 'Bimensuel', 'Paiement tous les deux mois', 'Zweimonatlich', 'Zahlung alle zwei Monate', 'Bimestral', 'Pagamento bimestral'),
    ('Trimestrale', 'Pagamento ogni tre mesi', 'Quarterly', 'Payment every three months', 'Trimestral', 'Pago cada tres meses', 'Trimestriel', 'Paiement tous les trois mois', 'Vierteljährlich', 'Zahlung alle drei Monate', 'Trimestral', 'Pagamento trimestral'),
    ('Quadrimestrale', 'Pagamento ogni quattro mesi', 'Quad-Monthly', 'Payment every four months', 'Cuatrimestral', 'Pago cada cuatro meses', 'Quadrimestriel', 'Paiement tous les quatre mois', 'Quartalsweise', 'Zahlung alle vier Monate', 'Quadramestral', 'Pagamento quadrimestral'),
    ('Semestrale', 'Pagamento ogni sei mesi', 'Bi-Annually', 'Payment every six months', 'Semestral', 'Pago cada seis meses', 'Semestriel', 'Paiement tous les six mois', 'Halbjährlich', 'Zahlung alle sechs Monate', 'Semestral', 'Pagamento semestral'),
    ('Annuale', 'Pagamento una volta all\'anno', 'Yearly', 'Payment once a year', 'Anual', 'Pago una vez al año', 'Annuel', 'Paiement une fois par an', 'Jährlich', 'Zahlung einmal im Jahr', 'Anual', 'Pagamento anual'),
    ('Biennale', 'Pagamento ogni due anni', 'Biennial', 'Payment every two years', 'Bienal', 'Pago cada dos años', 'Biennal', 'Paiement tous les deux ans', 'Zweijährlich', 'Zahlung alle zwei Jahre', 'Bienal', 'Pagamento bienal'),
    ('Triennale', 'Pagamento ogni tre anni', 'Triennial', 'Payment every three years', 'Trienal', 'Pago cada tres años', 'Triennal', 'Paiement tous les trois ans', 'Dreijährlich', 'Zahlung alle drei Jahre', 'Trienal', 'Pagamento trienal'),
    ('Quinquennale', 'Pagamento ogni cinque anni', 'Quinquennial', 'Payment every five years', 'Quinquenal', 'Pago cada cinco años', 'Quinquennal', 'Paiement tous les cinq ans', 'Fünfjährlich', 'Zahlung alle fünf Jahre', 'Quinquenal', 'Pagamento quinquenal'),
    ('Decennale', 'Pagamento ogni dieci anni', 'Decennial', 'Payment every ten years', 'Decenal', 'Pago cada diez años', 'Décennal', 'Paiement tous les dix ans', 'Zehnjährlich', 'Zahlung alle zehn Jahre', 'Dezena', 'Pagamento decenal');

CREATE TABLE IF NOT EXISTS lmgc_SubscriptionTypes (
id INT AUTO_INCREMENT PRIMARY KEY,
name_it VARCHAR(255) NOT NULL, -- Nome del tipo di abbonamento in italiano
description_it TEXT, -- Descrizione dettagliata del tipo di abbonamento in italiano
name_en VARCHAR(255), -- Nome del tipo di abbonamento in inglese
description_en TEXT, -- Descrizione dettagliata del tipo di abbonamento in inglese
name_es VARCHAR(255), -- Nome del tipo di abbonamento in spagnolo
description_es TEXT, -- Descrizione dettagliata del tipo di abbonamento in spagnolo
name_fr VARCHAR(255), -- Nome del tipo di abbonamento in francese
description_fr TEXT, -- Descrizione dettagliata del tipo di abbonamento in francese
name_de VARCHAR(255), -- Nome del tipo di abbonamento in tedesco
description_de TEXT, -- Descrizione dettagliata del tipo di abbonamento in tedesco
name_pt VARCHAR(255), -- Nome del tipo di abbonamento in portoghese
description_pt TEXT, -- Descrizione dettagliata del tipo di abbonamento in portoghese
duration INT NOT NULL, -- Durata dell'abbonamento espressa in giorni, mesi o anni
price DECIMAL(10, 2) NOT NULL, -- Prezzo dell'abbonamento
payment_frequency_id INT, -- Riferimento alla tabella lmgc_PaymentFrequencies
brand_id INT, -- Riferimento al marchio associato con l'abbonamento (opzionale)
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data e ora di creazione
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Data e ora dell'ultimo aggiornamento
FOREIGN KEY (payment_frequency_id) REFERENCES lmgc_PaymentFrequencies(id), -- Chiave esterna per la frequenza di pagamento
FOREIGN KEY (brand_id) REFERENCES lmgc_Brand(id) -- Chiave esterna per il marchio
);

CREATE TABLE IF NOT EXISTS lmgc_SubscriptionStatuses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_it VARCHAR(50) NOT NULL, -- Nome dello stato dell'abbonamento in italiano
    description_it TEXT, -- Descrizione dello stato dell'abbonamento in italiano
    name_en VARCHAR(50), -- Nome dello stato dell'abbonamento in inglese
    description_en TEXT, -- Descrizione dello stato dell'abbonamento in inglese
    name_es VARCHAR(50), -- Nome dello stato dell'abbonamento in spagnolo
    description_es TEXT, -- Descrizione dello stato dell'abbonamento in spagnolo
    name_fr VARCHAR(50), -- Nome dello stato dell'abbonamento in francese
    description_fr TEXT, -- Descrizione dello stato dell'abbonamento in francese
    name_de VARCHAR(50), -- Nome dello stato dell'abbonamento in tedesco
    description_de TEXT, -- Descrizione dello stato dell'abbonamento in tedesco
    name_pt VARCHAR(50), -- Nome dello stato dell'abbonamento in portoghese
    description_pt TEXT, -- Descrizione dello stato dell'abbonamento in portoghese
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data e ora di creazione
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP -- Data e ora dell'ultimo aggiornamento
);

INSERT INTO lmgc_SubscriptionStatuses (name_it, description_it, name_en, description_en, name_es, description_es, name_fr, description_fr, name_de, description_de, name_pt, description_pt)
SELECT * FROM (SELECT
    'Attivo', 'L\'abbonamento è attualmente attivo e valido.',
    'Active', 'The subscription is currently active and valid.',
    'Activo', 'La suscripción está actualmente activa y válida.',
    'Actif', 'L\'abonnement est actuellement actif et valide.',
    'Aktiv', 'Das Abonnement ist derzeit aktiv und gültig.',
    'Ativo', 'A assinatura está atualmente ativa e válida.'
) AS tmp
WHERE NOT EXISTS (
    SELECT 1 FROM lmgc_SubscriptionStatuses WHERE name_it = 'Attivo'
) LIMIT 1;

INSERT INTO lmgc_SubscriptionStatuses (name_it, description_it, name_en, description_en, name_es, description_es, name_fr, description_fr, name_de, description_de, name_pt, description_pt)
SELECT * FROM (SELECT
    'Scaduto', 'L\'abbonamento è scaduto e non è più valido.',
    'Expired', 'The subscription has expired and is no longer valid.',
    'Expirado', 'La suscripción ha expirado y ya no es válida.',
    'Expiré', 'L\'abonnement a expiré et n\'est plus valide.',
    'Abgelaufen', 'Das Abonnement ist abgelaufen und nicht mehr gültig.',
    'Expirado', 'A assinatura expirou e não é mais válida.'
) AS tmp
WHERE NOT EXISTS (
    SELECT 1 FROM lmgc_SubscriptionStatuses WHERE name_it = 'Scaduto'
) LIMIT 1;

INSERT INTO lmgc_SubscriptionStatuses (name_it, description_it, name_en, description_en, name_es, description_es, name_fr, description_fr, name_de, description_de, name_pt, description_pt)
SELECT * FROM (SELECT
    'Sospeso', 'L\'abbonamento è attualmente sospeso e può essere riattivato.',
    'Suspended', 'The subscription is currently suspended and may be reactivated.',
    'Suspendido', 'La suscripción está actualmente suspendida y puede ser reactivada.',
    'Suspendu', 'L\'abonnement est actuellement suspendu et peut être réactivé.',
    'Ausgesetzt', 'Das Abonnement ist derzeit ausgesetzt und kann reaktiviert werden.',
    'Suspenso', 'A assinatura está atualmente suspensa e pode ser reativada.'
) AS tmp
WHERE NOT EXISTS (
    SELECT 1 FROM lmgc_SubscriptionStatuses WHERE name_it = 'Sospeso'
) LIMIT 1;

CREATE TABLE IF NOT EXISTS lmgc_Subscriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    person_id INT NOT NULL, -- Riferimento alla persona associata all'abbonamento (supponendo che ci sia una tabella lmgc_People)
    subscription_type_id INT NOT NULL, -- Riferimento al tipo di abbonamento (collegamento alla tabella lmgc_SubscriptionTypes)
    start_date DATE NOT NULL, -- Data di inizio dell'abbonamento
    end_date DATE, -- Data di fine dell'abbonamento (opzionale, può essere calcolata in base alla durata)
    status_id INT NOT NULL, -- Riferimento alla tabella lmgc_SubscriptionStatuses
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data e ora di creazione
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Data e ora dell'ultimo aggiornamento
    FOREIGN KEY (person_id) REFERENCES lmgc_People(id), -- Chiave esterna che fa riferimento alla tabella lmgc_People
    FOREIGN KEY (subscription_type_id) REFERENCES lmgc_SubscriptionTypes(id), -- Chiave esterna che fa riferimento alla tabella lmgc_SubscriptionTypes
    FOREIGN KEY (status_id) REFERENCES lmgc_SubscriptionStatuses(id) -- Chiave esterna che fa riferimento alla tabella lmgc_SubscriptionStatuses
);
