CREATE TABLE IF NOT EXISTS lmgc_PeoplePropertyRoles (
    personId INT NOT NULL,
    propertyId INT NOT NULL,
    roleId INT NOT NULL,
    PRIMARY KEY (personId, propertyId, roleId),
    UNIQUE KEY unique_person_property (personId, propertyId),
    FOREIGN KEY (personId) REFERENCES lmgc_People(id),
    FOREIGN KEY (propertyId) REFERENCES lmgc_Property(id),
    FOREIGN KEY (roleId) REFERENCES lmgc_Roles(id),
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
