<?php
$servername  = "localhost";
$username = "Mohammed";
$password = "Mm123";
$dbname = "controlunitdb";
$f = $_POST["f"] ??"o";
$l = $_POST["l"] ??"o";
$s = $_POST["s"] ??"o";
$r = $_POST["r"] ??"o";
$b = $_POST["b"] ??"o";



$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($f == 'Forward' and $_POST ) {
  // code...
  $sql = "UPDATE directions SET direction = 'F' ";
}elseif ($l == 'Left') {
  // code...
  $sql = "UPDATE directions SET direction = 'L' ";
}elseif ($s == 'Stop') {
  // code...
  $sql = "UPDATE directions SET direction = 'S'" ;
}elseif ($r == 'Right') {
  // code...
  $sql = "UPDATE directions SET direction = 'R'";
}elseif ($b == 'Backward') {
  // code...
  $sql = "UPDATE directions SET direction = 'B'";
}else {
  // code...
  $sql = "UPDATE directions SET direction = 'N'";
}







if ($conn->query($sql) === TRUE) {

} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();

?>
