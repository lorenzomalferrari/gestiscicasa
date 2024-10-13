CREATE TABLE IF NOT EXISTS lmgc_VersionDB (
    id INT AUTO_INCREMENT PRIMARY KEY,
    version VARCHAR(20) NOT NULL,
    extended_version_name VARCHAR(100),
    notes TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    UNIQUE KEY unique_version_extended_version_name (version, extended_version_name)
);

INSERT INTO lmgc_VersionDB (version, extended_version_name, notes)
VALUES ('0.0.1', '0.0.1', 'base of initial version');
