CREATE TABLE IF NOT EXISTS lmgc_Person (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    birthdate DATE NOT NULL,
    city INT NOT NULL,
    state INT NOT NULL,
    nationality INT NOT NULL,
    description INT NOT NULL,
    idUser INT NOT NULL,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

/*
ALTER TABLE lmgc_Person
CONSTRAINT fk_city FOREIGN KEY (city) REFERENCES City(id),
CONSTRAINT fk_state FOREIGN KEY (state) REFERENCES State(id),
CONSTRAINT fk_nationality FOREIGN KEY (nationality) REFERENCES Nationality(id),
CONSTRAINT fk_user FOREIGN KEY (idUser) REFERENCES User(id),
/*CONSTRAINT chk_birthdate CHECK (birthdate <= CURDATE()),*/
/*CONSTRAINT chk_age CHECK (age >= 18 OR description = 'Minor')
*/
