<?php
if (ISSET($_POST['addUser'])){
	//build connection
	include('../includes/dbc.php');
	//vars from POST
	$first = $_POST['firstName'];
	$last = $_POST['lastName'];
	$user = $_POST['userName'];
	$pwd = $_POST['password'];
	$email = $_POST['email'];
	//hashing
	$dbpwd = password_hash ($pwd, PASSWORD_DEFAULT);
	//checking if not taken
	$query = "SELECT * FROM `users`";
	$result = mysqli_query ($dbc, $query) or die ('Error querying database');
	while ($row = mysqli_fetch_array($result)) {
		if ($user == $row['userName']) {
			$userdupmsg = "<font color='orange'> This username is already taken. </font>";
		} if ($email == $row['email']) {
			$emaildupmsg = "<font color='orange'> There's already an account created with this email address. </font>";
		}
	}
	//conditions
	if ($user== ""){
		$msg = "<font color='red'> No username entered. </font>";
	} elseif ($pwd== "") {
		$msg = "<font color='red'> No password entered. </font>";
	} elseif ($first== "") {
		$msg = "<font color='red'> No first name entered. </font>"; 
	} elseif ($last== "") {
		$msg = "<font color='red'> No last name entered. </font>"; 
	} elseif ($email== "") {
		$msg = "<font color='red'> No email entered. </font>"; 
	} elseif (!ISSET($userdupmsg)) {
		if (!ISSET($emaildupmsg)) {
			//build query
			$query2 = "INSERT INTO `zork_cook`.`users` (`id`, `firstName`, `lastName`, `userName`, `password`, `email`) VALUES (NULL, '$first', '$last', '$user', '$dbpwd', '$email')";
			//connect
			mysqli_query($dbc, $query2) or die ("Bad Query");
			echo "<h1><font color='red'> Record Inserted. </font></h1>";
			include ('isuLogin.php');
		}
	}
}	
?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../css/game.css"/>
	<title>Hibernation - Register</title>
</head>
<body class="beginBackground">
<h1> Add User </h1>
<div class="box">
	<?php 
	if (ISSET($userdupmsg)) {
		echo $userdupmsg."<br>";
	} if (ISSET($emaildupmsg)) {
		echo $emaildupmsg;
	}
	?>
	<div class="login">
	<form method="POST" action = "<?php echo $_SERVER['PHP_SELF']; ?> ">
		First Name: <input type="text" name="firstName">
		<br><br>
		Last Name: <input type="text" name="lastName">
		<br><br>
		Username: <input type="text" name="userName">
		<br><br>
		Password: <input type="text" name="password">
		<br><br>
		Email: <input type="text" name="email">
		<br><br>
		<input type="submit" name="addUser" value="Add User">
	</form>
	</div>
	<a href="isuLogin.php"> Already have an account? Click here to login. </a>
</div>
</body>
</html>