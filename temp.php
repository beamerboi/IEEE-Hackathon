<?php

include("config.php");


$sno = $_POST['email'];
$name = $_POST['fname'];
$uname = $_POST['lname'];
$pwd = $_POST['password'];

$sql = "INSERT INTO member(email, firstname, lastname, password) VALUES('$sno', '$name','$uname',
 '".md5($pwd)."')";

if(mysqli_query($db,$sql))
{
	echo "Registerd Successfully";
}
else
{
	echo mysqli_error($db);
}

?>
