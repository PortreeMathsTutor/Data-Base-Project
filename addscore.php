<?php
$servername = "localhost";
$username = "id9021970_username";
$password = "       ";
$dbName = "id9021970_highscores";
// Send variables for the MySQL database class.
$conn = new mysqli($servername , $username, $password,
$dbName);
if (!$conn) {
die("Could not connect: " . mysql_error());
}
// Strings must be escaped to prevent SQL injection attack.
$name = mysqli_real_escape_string($conn, $_GET['name']);
$score = mysqli_real_escape_string($conn, $_GET['score']);
$hash = $_GET['hash'];
$secretKey="3t96c5p3l61t9";
# Change this value to match the value stored in the client javascript below
$real_hash = md5($name . $score . $secretKey);
if($real_hash == $hash) {
// Send variables for the MySQL database class.
$query = "insert into scores values (NULL, '$name', '$score');";
$result = mysqli_query($conn, $query) or die('Query failed: ' . mysql_error());
}
?>
