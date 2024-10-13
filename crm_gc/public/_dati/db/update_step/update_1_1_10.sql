CREATE TABLE IF NOT EXISTS lmgc_PeoplePropertyRoles (
    person_id INT NOT NULL,
    property_id INT NOT NULL,
    role_id INT NOT NULL,
    PRIMARY KEY (person_id, property_id, role_id),
    UNIQUE KEY unique_person_property (person_id, property_id),
    FOREIGN KEY (person_id) REFERENCES lmgc_People(id),
    FOREIGN KEY (property_id) REFERENCES lmgc_Properties(id),
    FOREIGN KEY (role_id) REFERENCES lmgc_Roles(id),
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
