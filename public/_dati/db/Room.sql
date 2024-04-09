CREATE TABLE IF NOT EXISTS lmgc_Rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    number INT,
    name VARCHAR(255) NOT NULL,
    idUsageDestination INT,
    creationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updateData TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    note TEXT,
    idColor INT,
    idProperty INT,
    idRoomType INT,
    FOREIGN KEY (idUsageDestination) REFERENCES UsageDestinations(id),
    FOREIGN KEY (idColor) REFERENCES Colors(id),
    FOREIGN KEY (idProperty) REFERENCES Properties(id),
    FOREIGN KEY (idRoomType) REFERENCES RoomTypes(id)
);

ALTER TABLE lmgc_Rooms
ADD CONSTRAINT FK_Rooms_UsageDestinations FOREIGN KEY (idUsageDestination) REFERENCES UsageDestinations(id),
ADD CONSTRAINT FK_Rooms_Colors FOREIGN KEY (idColor) REFERENCES Colors(id),
ADD CONSTRAINT FK_Rooms_Properties FOREIGN KEY (idProperty) REFERENCES Properties(id),
ADD CONSTRAINT FK_Rooms_RoomTypes FOREIGN KEY (idRoomType) REFERENCES RoomTypes(id);

ALTER TABLE lmgc_Rooms
ADD CONSTRAINT FK_Rooms_UsageDestinations FOREIGN KEY (idUsageDestination) REFERENCES UsageDestinations(id),
ADD CONSTRAINT FK_Rooms_Colors FOREIGN KEY (idColor) REFERENCES Colors(id),
ADD CONSTRAINT FK_Rooms_Properties FOREIGN KEY (idProperty) REFERENCES Properties(id),
ADD CONSTRAINT FK_Rooms_RoomTypes FOREIGN KEY (idRoomType) REFERENCES RoomTypes(id);
