<?php

include("config.php");

if(!empty('email'))
$sno = $_POST['email'];
$name = $_POST['fname'];
$uname = $_POST['lname'];
$pwd = $_POST['password'];
$usertype = $_POST['usertype'];

$sql = "INSERT INTO member(email, firstname, lastname, password,usertype) VALUES('$sno', '$name','$uname',
 '$pwd','$usertype')";

if(mysqli_query($db,$sql))
{
	header("Location: index.html");
}
else
{
	echo mysqli_error($db);
}

?>
