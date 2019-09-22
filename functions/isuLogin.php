<html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../css/game.css"/>
	<title>Login</title>
</head>
<body class="beginBackground">
<h1> Hibernation - Login </h1>
<div class="box">
	<div class="login">	
		<form method="POST" action="isuAuthenticate.php">
			<br>
			Username: <input type="text" name="userName">
			<br><br>
			Password: <input type="text" name="password">
			<br><br>
			<input type="submit" name="login" value="Login">
		</form>
	</div>
	<a href="isuRegister.php"> Don't have an account? Click here to register. </a>
</div>
</body>
</html>