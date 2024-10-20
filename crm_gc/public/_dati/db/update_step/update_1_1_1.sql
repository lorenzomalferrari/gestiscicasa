CREATE TABLE IF NOT EXISTS lm_PeopleProperty (
    person_id INT,
    property_id INT,
    role_id INT,
    notes TEXT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (person_id, property_id),
    FOREIGN KEY (person_id) REFERENCES lm_Users(id),
    FOREIGN KEY (property_id) REFERENCES lm_Properties(id),
    FOREIGN KEY (role_id) REFERENCES lm_Roles(id)
);
