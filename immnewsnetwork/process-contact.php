<?php

//process-contact.php


//receive user variables

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$industry = $_POST['industry'];
$technical = $_POST['technical'];
$career = $_POST['career'];
$role = $_POST['role'];
$comments = $_POST['comments'];

//var_dump($_POST);
include("includes/db-config.php");
//save user data into the database

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `contact_form` 
	(`userId`,`firstname`, `lastname`, `email`, `industry`,`technical`,`career`,`role`,`comments`) 
	VALUES (NULL, '$firstname', '$lastname', '$email', '$industry', '$technical', '$career', 'role', '$comments');");

$stmt->execute();

header("Location:show-contact.php")

?>




