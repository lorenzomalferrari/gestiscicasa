CREATE TABLE IF NOT EXISTS lmgc_Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roleName VARCHAR(255) NOT NULL
);

INSERT INTO lmgc_Roles (roleName) VALUES ('Owner');
INSERT INTO lmgc_Roles (roleName) VALUES ('Tenant');
INSERT INTO lmgc_Roles (roleName) VALUES ('Manager');
INSERT INTO lmgc_Roles (roleName) VALUES ('Cleaner');
