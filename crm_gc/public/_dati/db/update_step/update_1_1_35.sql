CREATE TABLE lm_ExpenseTypes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(2) NOT NULL UNIQUE,
    name VARCHAR(100) NOT NULL,
    notes TEXT,
    /*colore CHAR(7) NULL,*/
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data di creazione
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP/*,
    CONSTRAINT chk_expense_types_colore CHECK (colore REGEXP '^#[0-9A-Fa-f]{6}$')*/
);

INSERT INTO lm_ExpenseTypes (code, name, description) VALUES
('AF', 'Affitto', 'Spesa per l\'affitto degli immobili'),
('MA', 'Manutenzione', 'Spesa per la manutenzione ordinaria e straordinaria'),
('PU', 'Pulizie', 'Spese per la pulizia degli spazi'),
('UT', 'Utenze', 'Spese per utenze (luce, gas, acqua)'),
('AS', 'Assicurazione', 'Spesa per assicurazioni'),
('TA', 'Tasse e imposte', 'Tasse e imposte relative alla proprietà'),
('SC', 'Spese condominiali', 'Spese per la gestione condominiale'),
('AR', 'Arredamento', 'Spese per l\'acquisto e il rinnovo dell\'arredamento'),
('RI', 'Ristrutturazione', 'Spese per lavori di ristrutturazione'),
('SI', 'Sicurezza', 'Spese per la sicurezza (allarmi, telecamere, ecc.)'),
('LE', 'Spese legali', 'Spese per servizi legali'),
('AD', 'Spese amministrative', 'Spese per la gestione amministrativa'),
('ME', 'Miglioramenti energetici', 'Spese per miglioramenti energetici'),
('MK', 'Marketing', 'Spese per pubblicità e promozioni'),
('TE', 'Tecnologia', 'Spese per software e hardware'),
('MO', 'Manodopera', 'Spese per manodopera e servizi professionali'),
('CO', 'Materiali di consumo', 'Spese per materiali di consumo'),
('TR', 'Trasporti', 'Spese per trasporti e logistica'),
('GE', 'Spese di gestione', 'Spese per la gestione dell\'immobile'),
('CB', 'Commissioni bancarie', 'Spese per commissioni bancarie e di transazione');


CREATE TABLE lm_Expense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    expense_type_id INT NOT NULL, -- Riferimento al tipo di spesa
    amount DECIMAL(10, 2) NOT NULL, -- Importo della spesa
    expense_date DATE NOT NULL, -- Data in cui è stata effettuata la spesa
    notes TEXT, -- Annotazioni aggiuntive
    property_id INT,
    colore CHAR(7) NULL, -- Colore esadecimale associato alla spesa (es. "#FF5733")
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data di creazione
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,/* -- Data di aggiornamento
    CONSTRAINT chk_expenses_colore CHECK (colore REGEXP '^#[0-9A-Fa-f]{6}$'), -- Controllo sul colore*/
    CONSTRAINT fk_expense_type FOREIGN KEY (expense_type_id) REFERENCES lm_ExpenseTypes(id)
);
