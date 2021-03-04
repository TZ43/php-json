<!DOCTYPE html>
<html>
<head>
	<title>Form Registration </title>
</head>
<body>

	<h1>Form Registration</h1>

	<?php 

		$FirstName = $_POST['fname'];
		$LastName = $_POST['lname'];
		$Gender = $_POST['gender'];
		$Email = $_POST['email'];
		$UserName = $_POST['uname'];
		$Password = $_POST['password'];
		$RecoveryEmail = $_POST['recoveryemail'];

    	echo "Create account successful. $FirstName $LastName <br>";

	
       $arr1 = array('uname' => $UserName, 'password' => $Password, 'fname' => $FirstName, 'lname' => $LastName, 'gender'=> $Gender, 'email' => $Email );
        $json_encoded_1 = json_encode($arr1);

$f1 = fopen("text.txt", "a");
fwrite($f1, $json_encoded_1 . "\n");
fclose($f1);
	?>

<a href="Login.html">Log In</a>
</body>
</html>