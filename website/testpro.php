<?php include 'connect.php'; 

// Execute the stored procedure to insert data into tables
mysqli_query($con, "CALL insert_data(1, 'example')");



?>

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_data`(IN param1 INT, IN param2 VARCHAR(255))
BEGIN
  -- Insert data into table1 and get the auto-generated ID
  INSERT INTO table1 (column1) VALUES (param1);
  SET @table1_id = LAST_INSERT_ID();

  -- Insert data into table2 and get the auto-generated ID
  INSERT INTO table2 (column1, column2) VALUES (@table1_id, param2);
  SET @table2_id = LAST_INSERT_ID();
  
  -- Insert data into table3 and get the auto-generated ID
  INSERT INTO table3 (column1, column2) VALUES (@table1_id, @table2_id);
  SET @table3_id = LAST_INSERT_ID();
  
  -- Return the generated IDs
  SELECT @table1_id AS table1_id, @table2_id AS table2_id, @table3_id AS table3_id;
END$$
DELIMITER ;