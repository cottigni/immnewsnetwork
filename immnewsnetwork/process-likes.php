<?php

//process-user-form.php


//receive user variables

$Like = $_POST['like'];


//var_dump($_POST);

//save user data into the database
include("includes/db-config.php");

$stmt = $pdo->prepare("INSERT INTO `likes` 
	(`likeid`, `liketotal`) 
	VALUES (NULL, '$Like');");

$stmt->execute();

header("Location:articles/wdbestcareer2019.html"")

?>