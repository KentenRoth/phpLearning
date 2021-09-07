<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel='stylesheet' type='text/css' href='style.css'/>
		<title>Document</title>
	</head>
	<body>
		<h2>Sign Up</h2>
		<form action='../includes/signup.inc.php' method='POST'>
			<input type='text' name='first' placeholder="First Name" />
			<br>
			<input type='text' name='last' placeholder="Last Name" />
			<br>
			<input type='text' name='email' placeholder="Email" />
			<br>
			<input type='text' name='uid' placeholder="User Name" />
			<br>
			<input type='password' name='pwd' placeholder="Password" />
			<br>
			<button type='submit' name='submit'>Sign Up</button>
		</form>
	
<?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if (strpos($fullUrl, 'signup=empty') == true) {
	echo '<p class="error">Please fill out all fields!</p>';
	exit();
} elseif (strpos($fullUrl, 'signup=invalidemail') == true) {
	echo '<p class="error">Please enter valid email.</p>';
	exit();
} elseif (strpos($fullUrl, 'signup=success')) {
	echo '<p class="success">You have been signed up!</p>';
}
?>

<?php
$data = [
	['first' => 'Kent', 'last' => 'Roth'],
	['first' => 'Brittany', 'last' => 'Roth'],
];

foreach ($data as $firstName) {
	echo $firstName['first'];
}
?>

	</body>
</html>
