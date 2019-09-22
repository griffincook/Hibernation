<?php
//help
		if ($command == "help") {
			echo "<p>";
			include('help.php');
			echo "</p>";
			$helpCount++;
		}
//bedroom
		elseif ($L == "bedroom") {
			if ($command == "go forward") {
				$L = "livingRoom"; 
			} elseif ($command == "go left") {
				$L = "bathroom";
			} elseif ($command == "go right") {
				$L = "closet";
			} elseif ($command == "go back") {
				echo $noSleep;
			} else {
				echo $no;
			}
		}
//bathroom
		elseif ($L == "bathroom") {
			if ($command == "go back") {
				$L = "bedroom";
			} elseif (strpos($command, "floor") !==false or strpos($command, "noise") !==false or strpos($command, "squeak") !==false) {
				if ($takenAlien == "n") {
					$L = "bathFloor";
				} else{
					echo $no;
				}
			} elseif ($command == "use shower") {
				if ($random == 1) {
					$h = $h-1;
					echo $showerCold;
				} elseif ($random == 2) {
					$h = $h+2;
					echo $showerGood;
				} elseif ($random == 3) {
					$h = $h-1;
					echo $showerHot;
				}
			} elseif ($command == "use toilet") {
				if ($random == 1) {
					$h = $h-2;
					echo $badToilet;
				} elseif ($random == 2 or $random == 3) {
					$h = $h+1;
					echo $goodToilet;
				}
			} else {
				echo $no;
			}
		}
	//bath floor
		elseif ($L == "bathFloor") {
			if (strpos($command, "stomp") !==false) {
				echo $stomp;
				$h = $h-2;
			} elseif ($command == "go back") {
				$L = "bathroom";
			} elseif (strpos($command, "drain") !==false) {
				$L = "drain";
			} else {
				echo $no;
			}
		}
		//drain
		elseif ($L == "drain") {
			if ($command == "go back") {
				$L = "bathFloor";
			} elseif ($command == "take alien") {
				$L = "bathroom";
				echo $alien;
				array_push($items,'alien');
				$takenAlien = "y";
			} else {
				echo $no;
			}
		}
//closet
		elseif ($L == "closet") {
			if ($command == "go back") {
				$L = "bedroom";
			} elseif (strpos($command, "clothes") !==false or (strpos($command, "dressed") !==false)) {
				$L = "clothes";
			} elseif ($command == "examine box") {
				$L = "boxL";
			} else {
				echo $no;
			}
		}
	//clothes
		elseif ($L == "clothes") {
			if ($command == "go back") {
				$L = "closet";
			} elseif (strpos($command, "business") !==false) {
				echo $business;
				$L = "closet";
			} elseif (strpos($command, "pajamas") !==false) {
				echo $pj;
				$L = "closet";
			} elseif (strpos($command, "casual") !==false) {
				echo $casual;
				$L = "closet";
			} else {
				echo $no;
			}
		}
	//box
		elseif ($L == "boxL") {
			if($command == "go back") {
				$L = "closet";
			} elseif ($command == "take key") {
				if ($takenKey == "n") {
					echo $takeKey;
					array_push($items,'key');
					$takenKey = "y";
				} else{
					echo $already;
				}
			} elseif ($command == "take packing peanuts") {
				if ($takenPeanuts == "n") {
					echo $peanuts;
					array_push($items,'packing peanuts');
					$takenPeanuts = "y";
				} else{
					echo $already;
				}
			} else {
				echo $no;
			}
		}	
//living room
		elseif ($L == "livingRoom") {
			if ($command == "go back") {
				$L = "bedroom";
			} elseif ($command == "go forward") {
				$L = "lab";
			} elseif ($command == "go right") {
				$L = "kitchen";
			} elseif ($command == "go left") {
				if ($unlock1 == "y" and $unlock2 == "y") {
					$L = "hallway";
				} else {
					$L = "exit";
				}
			} elseif (strpos($command, "tv") !==false) {
				echo $tv;
			} else {
				echo $no;
			}
		}
	//exit
		elseif ($L == "exit") {
			if ($command == "go back") {
				$L = "livingRoom";
			} elseif ($command == "use key") {
				if (in_array("key",$items)) {
					$unlock1 = "y";
					//unset key
					$key = array_search("key",$items);
					if($key!==false){
		    			unset($items[$key]);
					}
				} else {
					echo $noItem;
				}
			} elseif (strpos($command, "code") !==false or strpos($command, "password") !==false) {
				if ($unlock1 == "y") {
					$L = "code";
				} else {
					echo $manualFirst;
				}
			}  elseif ($command == "go forward") {
				if ($unlock1 == "y") {
					if ($unlock2 == "y") {
						$L = "hallway";
					} else {
						echo $notYetDigit;
					}
				} else {
					echo $notYetManual;
				}
			} else {
				echo $no;
			}
		}
		//code
		elseif ($L == "code") {
			if (strpos($command, "2255") !==false) {
				echo $exit1Done;
				$unlock2 = "y";
				$L = "hallway";
			} elseif ($command == "go back"){
				$L = "livingRoom";
			} else {
				echo $wrongCode;
				$h = $h-4;
			}
		}
//kitchen
		elseif ($L == "kitchen") {
			if ($command == "go back") {
				$L = "livingRoom";
			} elseif ($command == "go left") {
				$L = "fridge";
			} elseif ($command == "go forward") {
				$L = "counter";
			} elseif ($command == "go right") {
				$L = "microwave";
			} else {
				echo $no;
			}
		}
	//fridge
		elseif ($L == "fridge") {
			if ($command == "go back") {
				$L = "kitchen";
			} elseif ($command == "take microscope") {
				if ($takenMicro == "n") {
					echo $microscope;
					array_push($items,"microscope");
					$takenMicro = "y";
				} else {
					echo $already;
				}
			} elseif (strpos($command, "fridge") !==false){
				echo $noFridge;
			} else {
				echo $no;
			}
		}
	//counter
		elseif ($L == "counter") {
			if ($command == "go back") {
				$L = "kitchen";
			} elseif ($command == "take food") {
				if ($takenFood == "n") {
					echo $food;
					array_push($items,"food");
					$takenFood ="y";
				} else {
					echo $already;
				}
				$L = "kitchen";
			} elseif (strpos($command, "eat") !==false) {
				echo $eat;
				$h = $h-2;
			} else {
				echo $no;
			}
		}
	//microwave
		elseif ($L == "microwave") {
			if ($command == "go back") {
				$L = "kitchen";
			} elseif (strpos($command, "alien") !==false) {
				if (in_array("alien",$items)) {
					array_push($items, "big alien");
					//unset alien
					$key = array_search("alien",$items);
					if($key!==false){
    					unset($items[$key]);
					}
					echo $bigAlien;
				} elseif (in_array("big alien",$items)) {
					echo $alienMicroWarn;
					$h = $h-3;
				} else {
					echo $noItem;
				}
			} elseif (strpos($command, "key") !==false) {
				if (in_array("key",$items)) {
					echo $microKey;
					$h = $h-2;
				} else {
					echo $noItem;
				}
			} elseif (strpos($command, "packing peanuts") !==false) {
				if (in_array("packing peanuts",$items)) {
					echo $microPeanuts;
					$h = $h-1;
				} else {
					echo $noItem;
				}
			} elseif (strpos($command, "microscope") !==false) {
				if (in_array("microscope",$items)) {
					echo $microMicro;
				} else {
					echo $noItem;
				}
			} elseif (strpos($command, "food") !==false) {
				if (in_array("food",$items)) {
					echo $microFood;
				} else {
					echo $noItem;
				}
			} elseif (strpos($command, "keycard") !==false) {
				if (in_array("keycard",$items)) {
					echo $microCard;
				} else {
					echo $noItem;
				}
			} else {
				echo $no;
			}
		}
//lab
		elseif ($L == "lab") {
			if ($command == "go back") {
				$L ="livingRoom";
			} elseif ($command == "go right") {
				$L = "friendRoom";
			} elseif ($command == "go left") {
				$L = "poster";
			} elseif ($command == "go forward") {
				$L = "friend";
			} else {
				echo $no;
			}
		}
	//poster
		elseif ($L == "poster") {
			if ($command == "go back") {
				$L ="lab";
			} elseif ($command == "examine poster") {
				echo $poster;
			} else {
				echo $no;
			}
		}
	//friend
		elseif ($L == "friend") {
			if ($command == "go back") {
				$L ="lab";
			} elseif (strpos($command, "punch") !==false) {
				echo $punch;
				$h= $h-1;
			} elseif (strpos($command, "talk") !==false) {
				echo $convo;
			} elseif (strpos($command, "green alien") !==false or strpos($command, "magnifying glass") !==false) {
				echo $friendNeeds;
			} elseif (strpos($command, "microscope") !==false) {
				if (in_array("microscope", $items)) {
					echo $trade;
					array_push($items, "keycard");
					//unset microscope
					$key = array_search("microscope",$items);
					if($key!==false){
    					unset($items[$key]);
					}
				} else {
					echo $noItem;
				}
			} else {
				echo $no;
			}
		}
//friend's room
		elseif ($L == "friendRoom") {
			if ($command == "go back") {
				$L ="lab";
			} elseif ($command == "go right") {
				$L ="friendBathroom";
			} elseif ($command == "go left") {
				$L ="friendCloset";
			} elseif ($command == "go forward") {
				echo $noBed;
			} else {
				echo $no;
			}
		}
	//friend's bathroom
		elseif ($L == "friendBathroom") {
			if ($command == "go back") {
				$L ="friendRoom";
			} elseif (strpos($command, "mirror") !==false) {
				echo $mirror;
			} elseif ($command == "use shower") {
				if ($random == 1) {
					$h = $h-1;
					echo $showerCold;
				} elseif ($random == 2) {
					$h = $h+2;
					echo $showerGood;
				} elseif ($random == 3) {
					$h = $h-1;
					echo $showerHot;
				}
			} elseif ($command == "use toilet") {
				if ($random == 1) {
					$h = $h-2;
					echo $badToilet;
				} elseif ($random == 2 or $random == 3) {
					$h = $h+1;
					echo $goodToilet;
				}
			} else {
				echo $no;
			}
		}
	//friend's closet
		elseif ($L == "friendCloset") {
			if ($command == "go back") {
				$L ="friendRoom";
			} elseif ($command == "use phone") {
				echo $call;
				$music = "y";
			} elseif ($command == "take phone") {
				echo $noTakePhone;
				$h = $h-1;
			} else {
				echo $no;
			}
		}
//outside
		elseif ($L == "hallway") {
			if ($command == "go back") {
				$L = "livingRoom";
			} elseif (strpos($command, "food") !==false) {
				if (in_array("food", $items)) {
				//unset food
					$key = array_search("food",$items);
					if($key!==false){
	    				unset($items[$key]);
					}
					$foodVines = "y";
					echo $placeFood;
				} else echo $noItem;
			} elseif (strpos($command, "alien") !==false) {
				if (in_array("big alien", $items)) {
					if ($foodVines == "y") {
						//unset big alien
						$key = array_search("big alien",$items);
						if($key!==false){
		    				unset($items[$key]);
						}
						$vines = "y";
						echo $alienEat;
					} else echo $appetite;
				} elseif (in_array("alien", $items)) {
					echo $notBig;
				} else {
					echo $noItem;
				}
			} elseif ($command == "go down") {
				if ($vines == "y") {
					if ($ladder == "n") {
						$L = "ladder";
					} else {
						echo $climbDown;
						$L = "final";
					}
				} else {
					echo $clear;
				}
			} else {
				echo $no;
			}	
		}
	//ladder
		elseif ($L == "ladder") {
			if ($command == "go down" or strpos($command, "packing peanuts") !==false) {
				if(in_array("packing peanuts",$items)) {
					$key = array_search("packing peanuts",$items);
					if($key!==false){
		    			unset($items[$key]);
					}
					echo $safeLanding;
					$L = "final";
				} else {
					echo $painLanding;
					$L = "final";
					$h = $h-8;
				}
			} elseif ($command == "go up" or $command == "go back") {
				$L = "hallway";
			}
			else {
				echo $no;
			}
		}
	//final exit
		elseif ($L == "final") {
			if ($command == "go forward") {
				if ($unlock3 = "n") {
					$L = "keyCard";
				} elseif ($unlock3 = "y") {
					$L = "finalUnlock";
				}
			} elseif ($command == "take bar") {
				if ($takenBar == "n") {
					array_push($items,"bar");
					echo $bar;
					$takenBar = "y";
				} else {
					echo $already;
				}
			} elseif ($command == "go back" or $command == "go up") {
				if (in_array("bar",$items)) {
					echo $ladderFix;
					$ladder = "y";
					$L = "hallway";
					//unset bar
					$key = array_search("bar",$items);
					if($key!==false){
		    			unset($items[$key]);
					}
				} elseif ($ladder == "y") {
					$L = "hallway";
					echo $climbUp;
				} else {
					echo $noClimb;
				}
			}
			else {
				echo $no;
			}
		}
		//keycard
		elseif ($L == "keyCard") {
			if ($command == "use keycard") {
				if (in_array("keycard", $items)) {
					$unlock3 = "y";
					$L = "end";
					//unset keycard
					$key = array_search("keycard",$items);
					if($key!==false){
		    			unset($items[$key]);
					}
				} else {
					echo $noItem;
				}
			} elseif ($command == "go back") {
				$L = "final";
			} else {
				echo $no;
			}
		}
?>