CREATE TABLE IF NOT EXISTS lmgc_PersonPropertyRoles (
    personId INT NOT NULL,
    propertyId INT NOT NULL,
    roleId INT NOT NULL,
    PRIMARY KEY (personId, propertyId, roleId),
    UNIQUE KEY unique_person_property (personId, propertyId),
    FOREIGN KEY (personId) REFERENCES Persons(id),
    FOREIGN KEY (propertyId) REFERENCES Properties(id),
    FOREIGN KEY (roleId) REFERENCES Roles(id),
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
