CREATE TABLE IF NOT EXISTS lmgc_ColumnsTableVisitated (
    id INT AUTO_INCREMENT PRIMARY KEY,
    colonna VARCHAR(255) NOT NULL,
    tabella VARCHAR(255) NOT NULL,
    count INT NOT NULL DEFAULT 0,
    idUser INT NOT NULL,
    FOREIGN KEY (idUser) REFERENCES lmgc_Users(id),
    UNIQUE KEY unique_user_colonna_tabella (idUser, colonna, tabella)
);
