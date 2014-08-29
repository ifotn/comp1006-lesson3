<html>
<body>

<?php

$conn = mysqli_connect('localhost', 'dbrfreeman', '62048',  'dbrfreeman');

if (!$conn) {
	die('Could not connect: ' . mysql_error());
}

/*Save the newsletter*/
$sql = "INSERT INTO newsletters (title, body) VALUES ('$_POST[title]', '$_POST[body]')";

mysqli_query($conn, $sql);

echo "1 newsletter added";

/*Select all the email addresses and send out the newsletter*/
$sql = "SELECT email FROM persons";

$result = mysqli_query($conn, $sql) or die('Error querying database.');

/*set up the rest of the email variables*/
$from = 'rfreeman@georgianc.on.ca';
$subject = $_POST['title'];
$message = $_POST['body'];

while ($row = mysqli_fetch_array($result)) {
	$to = $row['email'];
	mail($to, $subject, $message, 'From: '. $from);
}

echo 'Newsletters sent';
mysqli_close($conn);

?>


</body>
</html>