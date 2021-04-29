<?php

include('config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$category = $_POST['category'];

$query = "INSERT INTO contact (name, email, subject, message, category) VALUES ('$name','$email', '$subject', '$message', '$category')";
mysqli_query($db,$query);

?>
