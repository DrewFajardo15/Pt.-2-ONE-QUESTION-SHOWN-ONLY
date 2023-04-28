<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
// It functions as a starter or is used to resume the session for the user. Declared before starting the main program code.

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<style>
	body{
		display: grid;
		place-items: center;
		text-align: center;
		background-image: linear-gradient(to left, lightblue, pink);
	}
</style>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Enter your full name:<br />
		<input type="text" name="fullname" placeholder="Full Name" required />
		<br /><label for="Email">Enter your email:</label>
			<br /><input type="Email" id="Email" name="email" placeholder="Email">
		<br /><label for="birthday">Birthday:</label>
			<br /><input type="date" id="birthday" name="birthday">
		<br />Gender:
			<br /><input type="radio" name="gender" value="male" />Male<br />
			<input type="radio" name="gender" value="female" />Female<br />
		<br />
		<input type="submit">
	</form>

</body>
</html>

<!-- DEBUG MODE -->
<!--<pre>
<?php
var_dump($_SESSION);
?>
</pre> 
