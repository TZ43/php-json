<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
<?php

$f = fopen("text.txt","r");
$_SESSION['fname'];
$_SESSION['lname'];
$_SESSION['email'];
$_SESSION['uname'];
	session_destroy();
	header("location:File Handling.html");
?>
</body>
</html>