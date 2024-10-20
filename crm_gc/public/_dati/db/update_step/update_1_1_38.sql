CREATE TABLE lm_UsersProperties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    person_id INT NOT NULL,
    property_id INT NOT NULL,
    role_id INT NOT NULL,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    notes TEXT,
    CONSTRAINT fk_person_id FOREIGN KEY (person_id) REFERENCES lm_People(id) ON DELETE CASCADE,
    CONSTRAINT fk_property_id FOREIGN KEY (property_id) REFERENCES lm_Properties(id) ON DELETE CASCADE,
    CONSTRAINT fk_role_id FOREIGN KEY (role_id) REFERENCES lm_Roles(id) ON DELETE CASCADE
);
