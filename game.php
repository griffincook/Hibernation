<?php
session_start();
include('includes/dbc.php');
//logged in?
if (!ISSET ($_POST['newGame']) and !ISSET ($_POST['continue'])) {
	Header("Location:functions/isuLogin.php");
} elseif (ISSET ($_POST['newGame']) or ISSET ($_POST['continue'])) {
	//set id
	$id = $_SESSION['id'];
	//css
	?>
	<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/game.css"/>
		<title>Hibernation</title>
	</head>
	<body>
	<h1> Hibernation </h1>
	<div class="box">
		<div id= "navbar">
			<div class = "button">
			<a href="functions/isuLogout.php"> Logout.</a>
			</div>
			<br><br>
		</div>
	</body>	
	</html>
		<?php
		//vars
		if (ISSET($_POST['submit'])) {
			//basic
			$command = $_POST['command'];
			$submit = $_POST['submit'];
			$L = $_POST['location'];
			//changes in world
			$unlock1 = $_POST['unlock1'];
			$unlock2 = $_POST['unlock2'];
			$unlock3 = $_POST['unlock3'];
			$foodVines = $_POST['food'];
			$vines = $_POST['vines'];
			$ladder = $_POST['ladder'];
			//other
			$h = $_POST['health'];
			$helpCount = $_POST['helpCount'];
			$items = $_POST['items'];
			$items = explode(", ",$items);
			$items = array_filter($items);
			sort($items);
			$random = rand(1,3);
			$song = 'includes/song.mp3';
			$music = $_POST['music'];
			//item movement
			$takenAlien = $_POST['takenAlien'];
			$takenKey = $_POST['takenKey'];
			$takenPeanuts = $_POST['takenPeanuts'];
			$takenFood = $_POST['takenFood'];
			$takenMicro = $_POST['takenMicro'];
			$takenBar = $_POST['takenBar'];
		} elseif (!ISSET($submit) and ISSET ($_POST['newGame'])) {
			echo "<p>";
			include('includes/descriptions.php');
			echo "</p>";
			echo $startStory;
			$L = "bedroom";
			$unlock1 = "n";
			$unlock2 = "n";
			$unlock3 = "n";
			$foodVines = "n";
			$vines = "n";
			$ladder = "n";
			$takenAlien = "n";
			$takenKey = "n";
			$takenPeanuts = "n";
			$takenFood = "n";
			$takenMicro = "n";
			$takenBar = "n";
			$items= array();
			$h = 10;
			$music = "n";
			$helpCount = 0;
		} elseif (!ISSET($submit) and ISSET ($_POST['continue'])) {
			$query2 = "SELECT * FROM `zork_cook` . `users` WHERE `id` = '$id';";
			$result2 = mysqli_query($dbc,$query2) or die ("Cannot connect to db");
			
			while ($row = mysqli_fetch_array($result2)) {
				$L = $row['location'];
				$unlock1 = $row['unlock1'];
				$unlock2 = $row['unlock2'];
				$unlock3 = $row['unlock3'];
				$foodVines = $row['foodVines'];
				$vines = $row['vines'];
				$ladder = $row['ladder'];
				$takenAlien = $row['takenAlien'];
				$takenKey = $row['takenKey'];
				$takenPeanuts = $row['takenPeanuts'];
				$takenFood = $row['takenFood'];
				$takenMicro = $row['takenMicro'];
				$takenBar = $row['takenBar'];
				$serializedItems= $row['items'];
				$items = unserialize($serializedItems);
				$h = $row['health'];
				$music = $row['music'];
				$helpCount = $row['helpCount'];
			}
		}
		//include descriptions
		echo "<p>";
		include('includes/descriptions.php');
		echo "</p>";
		//music
		if ($music == "y") {
			echo "<audio autoplay>";
				echo '<source src="includes/song.mp3">';
				echo '<source src="includes/song.ogg">';
			echo "</audio>";
		}
		//commands and outcomes
		if (ISSET($submit)) {
			include('includes/commandsOutcomes.php');
		}
		//serializing
		$dbItems = serialize($items);
		//saving game
			$query1= "UPDATE `zork_cook`.`users` SET `location` = '$L', `items` = '$dbItems', `unlock1` = '$unlock1', `unlock2` = '$unlock2', `unlock3` = '$unlock3', `foodVines` = '$foodVines', `vines` = '$vines', `ladder` = '$ladder', `health` = '$h', `music` = '$music', `takenAlien` = '$takenAlien', `takenKey` = '$takenKey', `takenPeanuts` = '$takenPeanuts', `takenMicro` = '$takenMicro', `takenFood` = '$takenFood', `takenBar` = '$takenBar', `helpCount` = '$helpCount' WHERE `users`.`id` = '$id';";
			mysqli_query($dbc,$query1) or die ('Error querying database');
		//only if they have health
		if ($h > 0 and $L!== "end") {	
			echo "<p>";
			//location descriptions
			include('includes/locationDescriptions.php');
			//imploding array
			$implode = implode(", ",$items);
			//game info for user
			echo "<br><br>Your inventory: ".$implode;
			echo "<br>";
			//inventory pics
			if (in_array("alien",$items)) {
				echo '<img src="css/items/alien.png" height="60" width="60">';
			}
			if (in_array("bar",$items)) {
				echo '<img src="css/items/bar.png" height="60" width="60">';
			}
			if (in_array("big alien",$items)) {
				echo '<img src="css/items/alien.png" height="100" width="100">';
			}
			if (in_array("food",$items)) {
				echo '<img src="css/items/food.png" height="60" width="60">';
			}
			if (in_array("key",$items)) {
				echo '<img src="css/items/key.png" height="30" width="70"> ';
			}
			if (in_array("keycard",$items)) {
				echo '<img src="css/items/keycard.png" height="40" width="50"> ';
			}
			if (in_array("microscope",$items)) {
				echo '<img src="css/items/microscope.png" height="60" width="60">';
			}
			if (in_array("packing peanuts",$items)) {
				echo '<img src="css/items/packingPeanuts.png" height="60" width="60">';
			}
			echo "<br>Health: ".$h." ";
			//hearts
			for ($x = 1; $x <= $h; $x++) {
				echo '<img src="css/items/heart.png" height="14" width="14">';
			}
			echo "<br>Times you've asked for help: ".$helpCount;
			echo "</p>";
			?>
			<html>
			<body class ="<?php echo $L; ?>">
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<?php if(ISSET($_POST['newGame'])) { ?>
					<input type="hidden" name="newGame" value="x">
					<?php } if(ISSET($_POST['continue'])) { ?>
					<input type="hidden" name="continue" value="x">
					<?php } ?>
					<input type="hidden" name="location" value="<?php echo $L; ?>">
					<input type="hidden" name="items" value="<?php echo $implode; ?>">
					<input type="hidden" name="unlock1" value="<?php echo $unlock1; ?>">
					<input type="hidden" name="unlock2" value="<?php echo $unlock2; ?>">
					<input type="hidden" name="unlock3" value="<?php echo $unlock3; ?>">
					<input type="hidden" name="food" value="<?php echo $foodVines; ?>">
					<input type="hidden" name="vines" value="<?php echo $vines; ?>">
					<input type="hidden" name="ladder" value="<?php echo $ladder; ?>">
					<input type="hidden" name="health" value="<?php echo $h; ?>">
					<input type="hidden" name="music" value="<?php echo $music; ?>">
					<input type="hidden" name="helpCount" value="<?php echo $helpCount; ?>">
					<input type="hidden" name="takenAlien" value="<?php echo $takenAlien; ?>">
					<input type="hidden" name="takenKey" value="<?php echo $takenKey; ?>">
					<input type="hidden" name="takenPeanuts" value="<?php echo $takenPeanuts; ?>">
					<input type="hidden" name="takenMicro" value="<?php echo $takenMicro; ?>">
					<input type="hidden" name="takenFood" value="<?php echo $takenFood; ?>">
					<input type="hidden" name="takenBar" value="<?php echo $takenBar; ?>">
					<br>What do you want to do? <input type="text" name="command">
					<input type="submit" name="submit" value="Do it!">
				</form>
				<br><p>*For help, type "help" in the command bar! If you want more of a challenge try to keep your help counter at a lower number *</p>
			</html>
		<?php
		//if dead or won
		} else {
			if ($h <= 0) {
				echo '<body class ="gameOver">';
				echo $loser;
				echo '</body>';
			} 
			elseif ($L == "end") {
				echo '<body class ="'.$L.'">';
				echo $end;
				echo '</body>';
			}
			//reset
			$query3= "UPDATE `zork_cook`.`users` SET `location` = '', `items` = '', `unlock1` = '', `unlock2` = '', `unlock3` = '', `foodVines` = '', `vines` = '', `ladder` = '', `health` = '', `music` = '', `takenAlien` = '', `takenKey` = '', `takenPeanuts` = '', `takenMicro` = '', `takenFood` = '', `takenBar` = '' WHERE `users`.`id` = '$id';";
			mysqli_query($dbc,$query3) or die ('Error querying database');
		?>		
				<div class="loser">
				<a href="game.php"> Restart</a>
				</div>';
		<?php
			}
		}
		?>
	<html>
	</div>
			</body>
	</html>