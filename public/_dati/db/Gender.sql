CREATE TABLE Gender (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    disabled BOOLEAN DEFAULT FALSE,
    CONSTRAINT chk_gender CHECK (gender IN ('Male', 'Female', 'Other')),
    CONSTRAINT chk_disabled CHECK (disabled IN (0, 1))
);

INSERT INTO Gender (gender, notes)
SELECT 'Male', 'Identifies as Male' FROM DUAL
WHERE NOT EXISTS (
    SELECT 1 FROM Gender WHERE gender = 'Male' AND notes = 'Identifies as Male'
);

INSERT INTO Gender (gender, notes)
SELECT 'Female', 'Identifies as Female' FROM DUAL
WHERE NOT EXISTS (
    SELECT 1 FROM Gender WHERE gender = 'Female' AND notes = 'Identifies as Female'
);

INSERT INTO Gender (gender, notes)
SELECT 'Other', 'Identifies as Non-binary' FROM DUAL
WHERE NOT EXISTS (
    SELECT 1 FROM Gender WHERE gender = 'Other' AND notes = 'Identifies as Non-binary'
);