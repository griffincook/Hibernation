<?php
	echo "What's wrong? Don't want to use your brain? Well if you really want them, here are the commands available to you at this location:<br>";
	if ($L == "bedroom") {
		echo '"go right" <br> "go left" <br> "go forward" <br> "go back"<br><br>';
	} elseif ($L == "bathroom") {
		echo '"go back" <br> "examine floor" <br> "use shower" <br> "use toilet"<br><br>';
	} elseif ($L == "bathFloor") {
		echo '"go back" <br> "stomp on drain" <br> "examine drain" <br><br>';
	} elseif ($L == "drain") {
		echo '"go back" <br> "take alien"<br><br>';
	} elseif ($L == "closet") {
		echo '"go back" <br> "get dressed" <br> "examine box"<br><br>';
	} elseif ($L == "clothes") {
		echo '"go back" <br> "business" <br> "pajamas" <br> "casual"<br><br>';
	} elseif ($L == "box") {
		echo '"go back" <br> "take packing peanuts" <br> "take key"<br><br>';
	} elseif ($L == "livingRoom") {
		echo '"go back" <br> "go left" <br> "go right" <br> "go forward" <br> "watch tv"<br><br>';
	} elseif ($L == "exit") {
		echo '"go back" <br> "go forward" <br> "use key" <br> "enter code"<br><br>';
	} elseif ($L == "code") {
		echo '"go back" <br> if you know the 4 digit code enter it here or else keep looking for it<br><br>';
	} elseif ($L == "lab") {
		echo '"go back" <br> "go left" <br> "go right" <br> "go forward" <br><br>';
	} elseif ($L == "poster") {
		echo '"go back" <br> "examine poster"<br><br>';
	} elseif ($L == "friend") {
		echo '"go back" <br> "talk to friend" <br> "punch friend" <br> "give (item from inventory)" p.s. do not literally write (item from inventory)<br><br>';
	} elseif ($L == "kitchen") {
		echo '"go back" <br> "go left" <br> "go right" <br> "go forward" <br><br>';
	} elseif ($L == "fridge") {
		echo '"go back" <br> "take microscope"<br><br>';
	} elseif ($L == "counter") {
		echo '"go back" <br> "take food" <br> "eat food"<br><br>';
	} elseif ($L == "microwave") {
		echo '"go back" <br> "microwave (item from inventory)" p.s. do not literally write (item from inventory)<br><br>';
	} elseif ($L == "friendRoom") {
		echo '"go back" <br> "go left" <br> "go right" <br> "go forward"<br><br>';
	} elseif ($L == "friendBathroom") {
		echo '"go back" <br> "use mirror" <br> "use shower" <br> "use toilet"<br><br>';
	} elseif ($L == "friendCloset") {
		echo '"go back" <br> "use phone" <br> "take phone"<br><br>';
	} elseif ($L == "hallway") {
		echo '"go back" <br> "go down" <br> use (item from inventory)" p.s. do not literally write (item from inventory)<br><br>';
	} elseif ($L == "ladder") {
		echo '"go back" <br> "go down" <br> "go up" <br> "use (item from inventory)" p.s. do not literally write (item from inventory)<br><br>';
	} elseif ($L == "final") {
		echo '"go back" <br> "go forward" <br> "go up" <br> "take bar"<br><br>';
	} elseif ($L == "keyCard") {
		echo '"go back" <br> "use (item from inventory)" p.s. do not literally write (item from inventory)<br><br>';
	}
?>