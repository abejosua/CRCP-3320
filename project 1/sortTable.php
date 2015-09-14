<table>

<?php
$servername = "crcp3320db.humanoriented.com";
$username = "crcp3320";
$password = "Crcp3320";
$dbname = "crcp3320";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!empty($_POST)) {
	$sortOrder = $_POST['sortOrder'];
	$sql = "SELECT * FROM albums ORDER BY ".$sortOrder.";";
}
else {
	$sql = "SELECT * FROM albums ORDER BY rank;";
}




$result = $conn->query($sql);

if (!$result) {
    echo "DB Error, could not query the database\n";
    echo 'MySQL Error: ' . mysql_error();
    exit;
}

while($row = $result->fetch_assoc()) {
    echo "<tr>\n" . "\t<td>" . $row["rank"] . "</td>\n \t<td>" . $row["title"]. "</td>\n \t<td>" . $row["year"]. "</td>\n</tr>\n";
}
$conn->close();
?>
</table>