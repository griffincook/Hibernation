<?php
session_start();
//build connection
include('../includes/dbc.php');

if (isset($_POST['login'])) {

	if (!empty($_POST['userName'])) {
		if (!empty($_POST['password'])) {
			//if everything is submitted
			$username = $_POST['userName'];
			$password = $_POST['password'];
			$query = "SELECT * FROM `users`";// WHERE `userName` = '" . $username . "'";
			$result = mysqli_query ($dbc, $query) or die ('Error querying database');
			while ($row = mysqli_fetch_array($result)) {
				$id = $row['id'];
				$username_db = $row['userName'];
				$password_db = $row['password'];
				if ($username == $username_db) {
					if (password_verify($password,$password_db)) {
						$_SESSION['user'] = $username;
						$_SESSION['id'] = $id;
						header('Location: isuIndex.php');
					}
					else {
						echo '<font color="red"> Please review you login details and try again. </font>';
					}
				}
			}
			include('isuLogin.php');
		}
		else {
			echo 'Please enter the correct password.';
			include('isuLogin.php');
		}
	}
	else {
		echo 'Please enter the correct username.';
		include('isuLogin.php');
	}
}
else {
	echo 'To access this area, please complete the login form.';
	include('isuLogin.php');
}
?>