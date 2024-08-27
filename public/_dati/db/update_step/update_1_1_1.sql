CREATE TABLE IF NOT EXISTS lmgc_UsersProperty (
    idPerson INT,
    idProperty INT,
    idRole INT,
    PRIMARY KEY (idPerson, idProperty),
    FOREIGN KEY (idPerson) REFERENCES lmgc_People(id),
    FOREIGN KEY (idProperty) REFERENCES lmgc_Property(id),
    FOREIGN KEY (idRole) REFERENCES lmgc_Roles(id)
);
