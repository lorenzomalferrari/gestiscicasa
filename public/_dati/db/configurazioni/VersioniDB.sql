CREATE DATABASE IF NOT EXISTS Configurazioni;

USE Configurazioni;

CREATE TABLE IF NOT EXISTS VersioniDB (
    id INT AUTO_INCREMENT PRIMARY KEY,
    versione VARCHAR(20) NOT NULL,
    nome_vers_estesa VARCHAR(100),
    note TEXT,
    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_aggiornamento TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_versione_nome_vers_estesa (versione, nome_vers_estesa)
);
