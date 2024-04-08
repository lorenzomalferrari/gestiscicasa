CREATE TABLE Users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

ALTER TABLE Users
ADD CONSTRAINT UC_Username UNIQUE (username); -- Assicura che lo username sia univoco

ALTER TABLE Users
ADD CONSTRAINT UC_Email UNIQUE (email); -- Assicura che l'email sia univoca
