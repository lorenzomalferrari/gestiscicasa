CREATE TABLE IF NOT EXISTS lmgc_PathVisitated (
    id INT AUTO_INCREMENT PRIMARY KEY,
    path VARCHAR(255) NOT NULL,
    idUser INT NOT NULL,
    count INT NOT NULL,
    UNIQUE (idUser, path)
);
