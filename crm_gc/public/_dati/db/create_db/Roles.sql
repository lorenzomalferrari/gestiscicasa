CREATE TABLE IF NOT EXISTS lm_Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

INSERT INTO lm_Roles (name) VALUES ('Owner');
INSERT INTO lm_Roles (name) VALUES ('Tenant');
INSERT INTO lm_Roles (name) VALUES ('Manager');
INSERT INTO lm_Roles (name) VALUES ('Cleaner');
