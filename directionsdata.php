<?php

$servername  = "localhost";
$username = "Mohammed";
$password = "Mm123";
$dbname = "controlunitdb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT direction FROM directions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["direction"]."<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

 ?>
