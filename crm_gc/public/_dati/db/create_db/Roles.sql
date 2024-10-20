CREATE TABLE IF NOT EXISTS lm_Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lm_Roles (name, notes) VALUES
('Proprietario', 'Ruolo responsabile della proprietà.'),
('Inquilino', 'Ruolo di chi affitta la proprietà.'),
('Gestore', 'Ruolo di chi gestisce la proprietà.'),
('Pulitore', 'Ruolo di chi si occupa della pulizia.'),
('Amministratore', 'Ruolo che gestisce le operazioni.'),
('Agente Immobiliare', 'Ruolo per la vendita o l\'affitto delle proprietà.'),
('Manutentore', 'Ruolo responsabile della manutenzione.'),
('Ospite', 'Ruolo di chi soggiorna temporaneamente nella proprietà.'),
('Contabile', 'Ruolo per la gestione finanziaria delle proprietà.');

CREATE TABLE IF NOT EXISTS lm_UserRoles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role_id INT NOT NULL,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES lm_Users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES lm_Roles(id) ON DELETE CASCADE
);
