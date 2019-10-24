<?php session_start();
//show users from database


include("includes/db-config.php");
include("includes/header.php");


$stmt = $pdo->prepare("SELECT * FROM `contact_form`;");

$stmt->execute();
?>

<div>
<a href="contact.php">Add a new contact user</a>
</div>

<?php


//display the data
while($row = $stmt->fetch()) {     
	echo('<div>');
	echo($row["userId"]); //or $row[0];
	echo(" "); //or $row[0];
	echo($row["firstname"]); //or $row[0];
	echo(" "); //or $row[0];
	echo($row["lastname"]); //or $row[0];
	echo(" "); //or $row[0];
	echo($row["email"]); //or $row[0];
	echo(" "); //or $row[0];
	echo($row["role"]); //or $row[0];
	echo(" "); //or $row[0];
	echo($row["comments"]); //or $row[0];
	echo(" "); //or $row[0];
	
?>
	<a href="edit.php?userId=<?php echo($row["userId"]); ?>">Edit</a>&nbsp;
	<a href="delete.php?userId=<?php echo($row["userId"]); ?>">Delete</a>
<?php
	echo('</div>');
}
?>