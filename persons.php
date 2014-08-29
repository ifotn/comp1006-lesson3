<html>
<body>

<?php

$conn = new PDO("mysql:host=localhost;dbname=dbrfreeman", 'dbrfreeman', '62048');

$sql = "SELECT * FROM persons";
$result = $conn->query($sql);

foreach ($result as $row) {
    echo 'Name: ' . $row['name'] . '. Email: ' . $row['email'] . '<br />';
} 

$conn = null;

?>

</body>
</html>