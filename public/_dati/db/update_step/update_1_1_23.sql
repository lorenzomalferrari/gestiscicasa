DROP TABLE IF EXISTS lmgc_Colors;

DELIMITER //

CREATE PROCEDURE RenameAndChangeColumnType()
BEGIN
    DECLARE done INT DEFAULT 0;
    DECLARE tableName VARCHAR(255);
    DECLARE cur CURSOR FOR
        SELECT table_name
        FROM information_schema.columns
        WHERE column_name = 'idColor'
        AND table_schema = 'uij8aoin_gestiscicasa';

    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;

    OPEN cur;

    read_loop: LOOP
        FETCH cur INTO tableName;
        IF done THEN
            LEAVE read_loop;
        END IF;

        SET @sql = CONCAT('ALTER TABLE `', tableName, '` CHANGE `idColor` `color` VARCHAR(7);');
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END LOOP;

    CLOSE cur;
END //

DELIMITER ;

CALL RenameAndChangeColumnType();

DROP PROCEDURE IF EXISTS RenameAndChangeColumnType;
