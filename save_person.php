<html>
<body>

<?php

$conn = mysqli_connect('localhost', 'dbrfreeman', '62048',  'dbrfreeman');

if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

echo 'connected to the database';


$sql = "INSERT INTO persons (name, email) VALUES ('$_POST[name]', '$_POST[email]')";

mysqli_query($conn, $sql);


echo "1 record added";


mysqli_close($conn);

?>


</body>
</html>