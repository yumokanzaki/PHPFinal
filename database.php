<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "Titan";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully" . "<br><br>";
$sql = "SELECT ID, Titanname, TitanInfo, SpecialType FROM titaninfo";
$result = $conn-> query($sql);
if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<br> Index No: " . $row["ID"] . "<br>" . "Titan Name:".$row["Titanname"] . "<br>"
		. "Information :".$row["TitanInfo"] . "<br>" . "Special :".$row["SpecialType"] . "<br>";		
	}
}
else
{
	echo "0 Results";
}
$conn->close();
?>