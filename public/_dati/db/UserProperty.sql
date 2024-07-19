CREATE TABLE IF NOT EXISTS lmgc_User_Property (
    idUser INT,
    idProperty INT,
    idRole INT,
    PRIMARY KEY (idUser, idProperty),
    FOREIGN KEY (idUser) REFERENCES Users(idUser),
    FOREIGN KEY (idProperty) REFERENCES Property(idProperty),
    FOREIGN KEY (idRole) REFERENCES lmgc_Roles(id)
);