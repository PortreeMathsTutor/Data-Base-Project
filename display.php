<?php
$servername = "localhost";
$username = "id9021970_username";
$password = "        ";
$dbName = "id9021970_highscores";
// Send variables for the MySQL database class.
$conn = new mysqli($servername , $username, $password,
$dbName);
if (!$conn) {
die("Could not connect: " . mysql_error());
}
$query = "SELECT * FROM `scores` ORDER by `score` DESC 
LIMIT 10";
$result = mysqli_query($conn ,$query) or die('Query 
failed: ' . mysql_error());
$num_results = mysqli_num_rows($result);
for($i = 0; $i < $num_results; $i++)
{
$row = mysqli_fetch_array($result);
echo $row['name'] . "\t" . $row['score'] . "\n";
}
?>
