CREATE TABLE IF NOT EXISTS lmgc_Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

INSERT INTO lmgc_Roles (name) VALUES ('Owner');
INSERT INTO lmgc_Roles (name) VALUES ('Tenant');
INSERT INTO lmgc_Roles (name) VALUES ('Manager');
INSERT INTO lmgc_Roles (name) VALUES ('Cleaner');
