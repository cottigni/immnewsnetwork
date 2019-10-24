<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8"/>
	<meta name="keywords" content="contact, form">
	<meta name="description" content="form to allow user sign ups and logins">
	<link rel="apple-touch-icon" sizes="180x180" href="./faviconpackage/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./faviconpackage/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./faviconpackage/favicon-16x16.png">
	<link rel="manifest" href="./faviconpackage/site.webmanifest">
	<link rel="mask-icon" href="./faviconpackage/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
</head>

<body>
<header>
	<img src="./images/immlogo.jpg" alt="website logo showing letters IMM" width="300" height="150"/>
<nav>
<ul>	
	<li><a href="./homepage.html">Home</a></li>
	<li><a href="./about.html">About</a></li>
	<li><a href="./contact.html">Contact</a></li>
</ul>
</nav>
</header>
<h1>Contact Us at IMM News</h1>
<h4>Please fill out the form below:</h4>
	
	<form action="process-contact.php" enctype="multipart/form-data" method="POST">
		<br>firstname: <input name="firstname" type="text" placeholder="Joe" required/></br>
		<br>lastname: <input name="lastname" type="text" placeholder="Bloggs" required/></br>
		<br>email: <input name="email" type="email" placeholder="Bloggs@gmail.com" required/></br>
		<br>Category Interests: Industry:<input name="industry" type="checkbox"/>Technical:<input name="technical" type="checkbox"/>Career:<input name="career" type="checkbox"/></br>
		<br>Your Role at IMMNews:<select name="role" multiple>
				<option value="1">Writer</option>
				<option value="2">Contributor</option>
				<option value="3">Administrator</option>
				</select></br>
		<br><textarea name="comments" minlength="10" maxlength="250" rows="4">Comments</textarea></br>
		<p><input type="submit"/></p>
	</form>

	<div>
		<a href="./homepage.html">Go Back to Homepage</a>
	</div>
</body>
<p>
<footer>We collect and use cookies on our site, to accept, please click <a href="#">here</a></footer>
</p>
</html>