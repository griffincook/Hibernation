<?php
//bedroom
if ($L == "bedroom") {
	echo "You are in your bedroom. Your bed is behind you, the bathroom is to the left, the closet is to the right and the living room is forward.";
} 

//bathroom
elseif ($L == "bathroom") {
	if ($takenAlien == "n") {
		echo "The whole bathroom is the size of a big bathtub. There's a toilet, a shower head on the ceiling and a squeaking noise coming from the floor.";
	} else {
		echo "The whole bathroom is the size of a big bathtub. There's a toilet and a shower head on the ceiling.";
	}
} elseif ($L == "bathFloor") {
	echo "You find a drain where the squeaking noise is coming from.";
} elseif ($L == "drain") {
	echo "You open the drain and find a little alien who was making the squeaking noise.";
}

//closet
elseif ($L == "closet") {
	echo "You are in the closet, you see your clothes and a box.";
} elseif ($L == "clothes") {
	echo "What style of clothing do you want to wear? Business, pajamas or casual?";
} elseif ($L == "boxL") {
	if ($takenKey == "y") {
		if ($takenPeanuts == "n") {
			echo "There are still many packing peanuts left in this box.";
		} elseif ($takenPeanuts == "y") {
			echo "The box is empty, you took everything that was in it.";
		}
	} elseif ($takenPeanuts == "y") {
		echo "There is a lonely key left in this box.";
	} else {
		echo "You find a key and many packing peanuts inside the box.";
	}	
}

//living room
elseif ($L == "livingRoom") {
	echo "You are in the living room. The exit is to the left, the kitchen is to the right and the science lab is forward. There is also a tv on the wall.";
} elseif ($L == "exit") {
	if ($unlock1 == "n" and $unlock2 == "n"){
		echo "You find yourself at a locked door. There are two locks, a manual one that requires a key and a digital one that requires a four digit passcode.";
	} elseif ($unlock1 == "y" and $unlock2 == "n") {
			echo "You have unlocked the manual lock but still have to crack the digital code.";
	} elseif ($unlock1 == "y" and $unlock2 == "y") {
		echo "You have unlocked the door.";
	}
} elseif ($L == "code") {
	echo "You look at the keypad. There are four empty spaces. What is the code?";
}
//lab
elseif ($L == "lab") {
	echo "You are in the science lab. There is a poster is to your left, your friend is in front of you and your friend's room is to your right.";
} elseif ($L == "poster") {
	echo "You are standing in front of a big poster. It covers about a third of the wall.";
} elseif ($L == "friend") {
	echo "You see your friend but he looks different... you don't know why, he just does. He's not engaging with you because he's too busy examining some little green aliens with a magnifying glass, which is probably not the best tool for the job.";
}

//kitchen
elseif ($L == "kitchen") {
	echo "You are in the kitchen. The fridge is to your left, a counter top is in front of you and a microwave is to your right.";
} elseif ($L == "fridge") {
	if ($takenMicro == "n") {
		echo "You are standing in front of the fridge. The door is propped open by a microscope.";
	} else {
		echo "You are standing in front of the fridge. The door is now closed but there's no way that it's going to be functional after being held open for so long.";
	}
} elseif ($L == "counter") {
	if ($takenFood == "n") {
		echo "You walk up to the counter. There's some food there but who knows how old it is.";
	} else {
		echo "The counter is bare. What you were expecting, you already took the food that was here.";
	}
} elseif ($L == "microwave") {
	echo "You look at the microwave. It's pretty dirty and old but it's useable. What do you want to microwave?";
}

//friend's room
elseif ($L == "friendRoom") {
	echo "You are in your friend's room, hopefully he doesn't get mad! It's identical to yours. The closet is on your left, the bathroom is on the right and his bed is in front of you.";
} elseif ($L == "friendBathroom") {
	echo "You are in your friend's bathroom. It's the same as yours, with a shower and a toilet, except there's also a mirror.";
} elseif ($L == "friendCloset") {
	echo "You are in your friend's closet, except it doesn't look like much of a closet, more like a phonebooth. There is a little table with a phone on it.";
} 
//outside
elseif ($L == "hallway") {
	if ($foodVines=="n") {
		echo "You are in the hallway. There's a ladder going downwards but it's covered in vines. They almost look edible but they're too thick for your teeth.";
	} elseif ($foodVines=="y" and $vines == "n") {
		echo "You are in the hallway. There's a ladder going downwards but it's covered in vines. At least you put the food on them so that they can smell bad too!";
	} elseif ($vines=="y") {
		echo "You are in the hallway. There's a ladder going downwards and your little alien buddy is sleeping in the corner. It's probably best if you don't bother him.";
	}
} elseif ($L == "ladder") {
	echo "You climb half-way down the ladder but the middle of the ladder is missing. You could try going down anyways but it is a far drop. If only you had something soft to land on.";
} elseif ($L == "final") {
	if ($takenBar == "n") {
		echo "You find yourself in a dark, tiny grey room. There isn't much in there, only a door with a keycard reader in front of you and the missing bar from the ladder on the ground.";
	} else {
		echo "You find yourself in a dark, tiny grey room. There isn't much in there, only a door with a keycard reader in front of you.";
	}
} elseif ($L == "keyCard") {
	echo "You walk up to the door but it's locked. There is a slot to use a keycard and a red light.";
} elseif ($L == "finalUnlock") {
	echo "You have successfully unlocked the door, would you like to open it? There is no going back after this.";
}
?>