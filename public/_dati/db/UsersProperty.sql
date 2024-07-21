CREATE TABLE IF NOT EXISTS lmgc_UsersProperty (
    idPerson INT,
    idProperty INT,
    idRole INT,
    PRIMARY KEY (idPerson, idProperty),
    FOREIGN KEY (idPerson) REFERENCES Person(id),
    FOREIGN KEY (idProperty) REFERENCES Property(id),
    FOREIGN KEY (idRole) REFERENCES lmgc_Roles(id)
);
