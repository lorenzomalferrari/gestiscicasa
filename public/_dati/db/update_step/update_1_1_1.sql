CREATE TABLE IF NOT EXISTS lmgc_PeopleProperty (
    idPerson INT,
    idProperty INT,
    idRole INT,
    PRIMARY KEY (idPerson, idProperty),
    FOREIGN KEY (idPerson) REFERENCES lmgc_People(id),
    FOREIGN KEY (idProperty) REFERENCES lmgc_Properties(id),
    FOREIGN KEY (idRole) REFERENCES lmgc_Roles(id)
);
