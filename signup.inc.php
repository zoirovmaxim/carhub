з<?php

require 'conectare.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO login (name, email, subject, message) VALUES ('$name','$email','$subject','$message')";
$result = mysqli_query($conectare, $sql);

header("Location: index.php");
