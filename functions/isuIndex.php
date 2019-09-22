<?php
session_start();
if (ISSET ($_SESSION['user'])) {
?>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="../css/game.css"/>
	<title>Menu</title>
</head>
<audio autoplay>
	<source src="../includes/titleMusic.mp3">
	<source src="../includes/titleMusic.ogg">
</audio>
<body class="beginBackground">
	<h1> Hibernation - Main Menu </h1>
	<div class="box">
		<div id= "navbar">
			<div class = "button">
			<a href="functions/isuLogout.php"> Logout.</a>
			</div>
			<br><br>
		</div>
		<p> Welcome to Hibernation, the text-based exploration game by Griffin Entertainment! <br>  Don't worry if you don't want to play through all of Hibernation in one sitting. The game has an autosave feature so if you log back into your account you will be able to continue from where you left off!<br> <br>
			Before you start you should know the basic commands are as follows: <br>
			- go forward <br>
			- go back *moves you to the location behind you, not necessarily where you just came from<br>
			- go left <br>
			- go right <br>
			- go down <br>
			- go up <br>
			- examine (object) <br>
			- take (item) <br>
			- use (item) <br><br>
			It's good to note that these commands don't work in every location and that some locations have other commands.
		</p>
		<br>
		<div class="gametype">
			<form method="POST" action="../game.php">
				<input type="submit" name="newGame" value="Start a New Game"> <p>
				<br>
				<?php 
				//only show continue if they have a game going
				include ('../includes/dbc.php');
				$id = $_SESSION['id'];
				$query4 = "SELECT * FROM `zork_cook` . `users` WHERE `id` = '$id';";
				$result4 = mysqli_query($dbc,$query4) or die ("Cannot connect to db");
				while ($row = mysqli_fetch_array($result4)) {
					$L = $row['location'];
				}
				if ($L !== "") {
				?>
				<input type="submit" name="continue" value="Continue">
				<?php } ?>
			</form>
		</div>
		<br>
	</div>
</body>
</html>
<?php
}
else {
	Header("Location:isuLogin.php");
}
?>