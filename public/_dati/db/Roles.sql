CREATE TABLE Roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    roleName VARCHAR(255) NOT NULL
);

INSERT INTO Roles (roleName) VALUES ('Purchasing Manager'), ('Sales Person'), ('Supplier');
