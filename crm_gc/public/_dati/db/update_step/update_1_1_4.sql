CREATE TABLE IF NOT EXISTS lm_Rooms (
    id INT AUTO_INCREMENT PRIMARY KEY,
    number INT,
    name VARCHAR(255) NOT NULL,
    usage_destination_id INT,
    create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    notes TEXT,
    property_id INT,
    room_types_id INT,
    FOREIGN KEY (usage_destination_id) REFERENCES lm_UsageDestinations(id),
    FOREIGN KEY (property_id) REFERENCES lm_Properties(id),
    FOREIGN KEY (room_types_id) REFERENCES lm_RoomTypes(id)
);
