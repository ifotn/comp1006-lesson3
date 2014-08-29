<html>
<body>

<?php

$conn = new PDO("mysql:host=localhost;dbname=dbrfreeman", 'dbrfreeman', '62048');

$sql = "SELECT * FROM persons";
$result = $conn->query($sql);
$row_count = $result->rowCount();

echo "$row_count records found";

echo '<table border="1"><tr><td>Name</td><td>Email</td></tr>';

foreach ($result as $row) {
    echo '<tr><td>' . $row['name'] . '</td><td>' . $row['email'] . '</td></tr>';
} 
	echo '</table>';

$conn = null;

?>

</body>
</html>