<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
    $username = $_GET['UserName'];
	$password = $_GET['Password'];
	$f = fopen("text.txt","r");
	$data = fread($f,filesize("text.txt") );
	$data_filter = explode ("\n",$data);

	for ($i = 0; $i<count($data_filter);$i++){
		if($username==$data_filter[4] && $password==$data_filter[5] ){
$_SESSION['fname']=$data_filter[0];
$_SESSION['lname']=$data_filter[1];
$_SESSION['email']=$data_filter[3];
$_SESSION['uname']=$data_filter[4];
}
 }
echo $_SESSION['fname'];
echo "<br>";
echo $_SESSION['lname'];
echo "<br>";
echo $_SESSION['email'];
echo "<br>";
echo $_SESSION['uname'];
?>
<form action="LogoutAction.php" method="POST" >
	<input type="submit" value="Log out">
</form>
</body>
</html>