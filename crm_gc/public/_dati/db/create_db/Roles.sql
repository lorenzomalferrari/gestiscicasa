CREATE TABLE IF NOT EXISTS lm_Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    notes TEXT,
    by_system BIT DEFAULT b'0',
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO lm_Roles (name, notes, by_system) VALUES
('Proprietario', 'Ruolo responsabile della proprietà.',1),
('Inquilino', 'Ruolo di chi affitta la proprietà.',1),
('Gestore', 'Ruolo di chi gestisce la proprietà.',1),
('Pulitore', 'Ruolo di chi si occupa della pulizia.',1),
('Amministratore', 'Ruolo che gestisce le operazioni.',1),
('Agente Immobiliare', 'Ruolo per la vendita o l\'affitto delle proprietà.',1),
('Manutentore', 'Ruolo responsabile della manutenzione.',1),
('Ospite', 'Ruolo di chi soggiorna temporaneamente nella proprietà.',1),
('Contabile', 'Ruolo per la gestione finanziaria delle proprietà.',1);

CREATE TABLE IF NOT EXISTS lm_UserRoles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    role_id INT NOT NULL,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES lm_Users(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES lm_Roles(id) ON DELETE CASCADE
);
