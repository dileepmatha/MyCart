<?php
$connect = mysqli_connect('localhost','root','','mycart');
if($_POST){
	$name = $_POST["name"];
	$gmail = $_POST["gmail"];
	$number = $_POST["number"];
	$password = $_POST["password"];
	$address = $_POST["address"];
	$con = "INSERT INTO `register`(`Name`, `Email`, `Phone`, `Password`, `Address`) VALUES ('$name','$gmail','$number','$password','$address')";
	if (!mysqli_query($connect,$con)) {
		die('error');
	}
	echo "Registered Successfully";
	echo "<br> Click her to<a href='login.php'>login</a>";
}
?>
