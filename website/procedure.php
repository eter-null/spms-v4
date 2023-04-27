<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spmsv4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Execute the stored procedure definition
if ($conn->multi_query($sql) === TRUE) {
    echo "Stored procedure created successfully";
} else {
    echo "Error creating stored procedure: " . $conn->error;
}

// Call the stored procedure
$studentID = 8585;
$semester = 28;
$sectionID = 8;
$year = 2015;
$marks =100;
$grade ='A';
$courseID = 'cmn111';
$sql = "CALL insert_into_threeTablesElma('$studentID', '$semester','$sectionID', '$year', '$courseID', '$marks' , '$grade')";
if ($conn->query($sql) === TRUE) {
    echo "Stored procedure called successfully";
} else {
    echo "Error calling stored procedure: " . $conn->error;
}

// Close connection
$conn->close();
?>
