<?php
$connect = mysqli_connect('localhost','root','','mycart');
$gmail = $_POST["gmail"];
$password = $_POST["password"];
$query = "SELECT * FROM `register` WHERE `Email` = '$gmail' and `Password` = '$password'";
$result = mysqli_query($connect,$query) or die('error');
$rows = mysqli_num_rows($result);
if ($rows==1) {
	$_SESSIONS['gmail'] = $gmail;
	header("Location: home.php");
}
else {
	echo "Wrong password or wrong username <br> Click her to<a href='login.php'>login</a>";
}
?>
