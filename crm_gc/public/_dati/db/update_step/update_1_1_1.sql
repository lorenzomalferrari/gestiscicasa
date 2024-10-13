CREATE TABLE IF NOT EXISTS lmgc_PeopleProperty (
    person_id INT,
    property_id INT,
    role_id INT,
    PRIMARY KEY (person_id, property_id),
    FOREIGN KEY (person_id) REFERENCES lmgc_People(id),
    FOREIGN KEY (property_id) REFERENCES lmgc_Properties(id),
    FOREIGN KEY (role_id) REFERENCES lmgc_Roles(id)
);
