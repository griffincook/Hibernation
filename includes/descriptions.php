<?php
//general
$already = "<p>You already took that item.</p><br>";
$no = "<p>You can not do that. </p><br>";
$noItem = "<p>You don't have that item in your inventory.</p><br>";
$loser = "<p>YOU LOSE! Have you never played a video game before?</p><br>";
$end = "<p>You walk outside to find a whole moon civilization that definitely wasn't there when you last checked. Several people run up to you and take your picture. Once they disperce, you see that everyone is watching you. A man in a suit walks up to you and starts to explain everything. He starts off by saying that it is actually the year 2298 and that you have been in a coma for 31 years! Apparently that alarm that you heard go off before you fell asleep was due to a gas leakage. You learn that that wasn't actually your friend John (who's name you were reminded of indirectly) but actually a robot clone who was placed there to test you. Your real friend was quick enough to get a gas mask during the leak in 2267 and was unharmed. He tells you that the reason they made it so hard for you to get out of the base was so that you could get your brain working and puzzle-solving again. After this all sinks in the man in the suit tells you one more thing. He tells you that the city that you are looking at is all based off of your blueprints, the same ones you have hanging in your base. He then grabs your arm and raises it in the air with his, while he exclaims to the crowd: OUR HERO HAS AWOKEN!<br><br> Thank you for playing Hibernation! </p><br>";
//bedroom
$startStory = "<p>You wake up feeling a little disoriented from what feels like the longest sleep of your life. You go to check how long you slept for but there are no clocks around to check. The last thing you remember before falling asleep was an alarm going off but your room mate must have fixed the problem. The year is 2267 and you are located at moon base 17, one of Canada's many experimental moon bases. You have been living there for 3 years with your bestfriend, who's name you can't seem to remember right now for some reason. You feel like you haven't talked to him in ages. You get out of bed and stand up but immediately fall back down because your legs are asleep. You wait for the blood to come back and then stand back up. You are now ready to carry on with your day.</p><br>";
$noSleep = "<p>You've slept enough, you don't need to go to bed.</p><br>";
//bathroom
$showerGood = "<p>You take a shower and the temperature is perfect! You feel a little more awake. </p><br>";
$showerHot = "<p>You take a shower but it's too hot and you burn yourself.</p><br>";
$showerCold = "<p>You take a shower but it's a little chilly. You feel a little sick.</p><br>";
$goodToilet = "<p>You use the toilet and feel so relieved! You're now ready to keep on with your day! </p><br>";
$badToilet = "<p>You use the toilet but it wasn't a pleasant experience.</p><br>";
$stomp = "<p>The sound gets louder and hurts your ears. </p><br>";
$alien = "<p>You pick up a small and blue alien. </p><br>";
//closet
$business = "<p>You put on a suit and a tie, but can't find any pants. Oh well.</p><br>";
$pj = "<p>You put on your astronaut onesie.</p><br>";
$casual = "<p>You put on some shorts and a tshirt.</p><br>";
$takeKey = "<p>You take the key.</p><br>";
$peanuts = "<p>You take all the packing peanuts.</p><br>";
//living room
$tv = "<p>You sit down and start watching a documentary on the great war of the 2140s. You've seen the documentary more times than you can count but there aren't too many other choices. You don't watch for more than 5 minutes then you get back up.</p><br>";
//kitchen
$microscope = "<p>You take the microscope.</p><br>";
$noFridge = "<p>The fridge is empty so it is no use to you.</p><br>";
$food = "<p>You take the food.</p><br>";
$bigAlien = "<p>You microwave the alien with good intentions... hopefully. When you look through the door to see how he's doing you can see him growing! It's like he's a popcorn kernel in slow motion! When you take the alien out he is 3 times bigger than before.</p><br>";
$alienMicroWarn = "<p>That much radiation exposure could do anything to the poor thing but oh well. You microwave him again but he doesn't like it. He jumps out and bites you!</p><br>";
$microKey = "<p>You put the key in the microwave. Weren't you ever told not to put metal in a microwave? You get shocked.</p><br>";
$microPeanuts = "<p>You put the packing peanuts in the microwave. They give off a toxic smell and you feel sick.</p><br>";
$microMicro = "<p>The microscope is to big to fit in the microwave.</p><br>";
$microFood = "<p>You heat up the food and it makes the whole kitchen smell bad.</p><br>";
$microCard = "<p>You put the keycard in the microwave but nothing happens.</p><br>";
$eat = "<p>You eat some of the food and immediately feel sick. Maybe it's best if you don't try that again.</p><br>";
//lab
$poster = "<p>It's a blueprint for a moon civilization. It's dated 2255 in the bottom left corner. You remember that you drew this back on Earth when you were 20 years old and had hoped that one day it would be realized.</p><br>";
$trade = "<p>You give him the microscope that you found and he thanks you for making his job easier. He tells you that the aliens he's examining are facinating because if microwaved they become 3 times as big. He goes on to say that he lost a blue alien and if you can find it you can keep it! Just as you're about to leave, he gives you a keycard and says he's not supposed to help you but that you'll need it to get out. You wonder what the heck he's talking about. Not supposed to help you, what's that supposed to mean. You don't say any of this out loud but instead just say thanks for the keycard. You start to wonder whether you have amnesia or something because you sure are missing some details.</p><br>";
//two different convos depending on whether given microscope or not
if (in_array("keycard", $items) or $unlock3 == "y") {
	$convo = "<p>You try to talk to your friend but he interupts you and says: I already told you I'm not supposed to help you. I'm sorry that I can't explain anything but you'll understand soon enough.</p><br>";
} elseif (!in_array("keycard", $items)) {
	$convo = "<p>You try to talk to your friend but he interupts you and says: I'm sorry, I, uh, can't talk right now because I'm, uh, too busy. Maybe if you find me my missing microscope I can talk for a second.";
}
$friendNeeds = "<p>Your friend needs that for his experiment so he'd probably prefer if you just didn't touch it!</p><br>";
$punch = "<p>You punch him. He's very surprised but that doesn't stop him from putting you in your place. He punches you back twice as hard and says: WHAT WAS THAT FOR!</p><br>";
//friend
$boBed = "<p>Your friend probably wouldn't like it if you went on his bed.</p><br>";
$noTakePhone = "<p>This phone is no use to you unless it is plugged in here. Besides, you shouldn't try to steal. Since I own you, I'm taking away 1 of your health points for being so incosiderate!</p><br>";
$mirror = "<p>You look in the mirror and realize that you're not 32 anymore. You have wrinkles and gray hair. How long were you asleep for?</p><br>";
$call = "<p>You pick up the phone and there is a message on it. You listen to it but it's hard to make out. It sounds like there are several voices but the main voice is that of a woman. It's all giberish to you until you make out the words I AM SORRY BUT RICK MADE ME DO IT. You're confused but then music starts playing. You don't know the song but listen anyways, hoping it's meaningfull. This is what you hear: <b>Never gonna give you up. Never gonna let you down. Never gonna run around and desert you. Never gonna make you cry. Never gonna say goodbye. Never gonna tell a lie and hurt you.</b> After hearing the song you wish you had never picked up the phone because you know this song will be stuck in your head for the rest of your life. You don't delete the message from the phone just in case it's important to your friend.</p><br>";
//exit
$manualFirst = "<p>You have to unlock the manual lock first.</p><br>";
$notYetDigit = "<p>You have not yet unlocked the digital lock.</p><br>";
$notYetManual = "<p>You have not yet unlocked the manual lock.</p><br>";
$exit1Done = "<p>You have unlocked the door and walk through.</p><br>";
$wrongCode = "<p>Wrong! You get shocked by the lock's security, are you just guessing?</p><br>";
//hallway
$clear = "<p>You can't get by those vines, at least not without the help of someone or something else.</p><br>";
$appetite = "<p>The alien won't eat the vines in that condition. Maybe try to make them more appetizing. </p><br>";
$notBig = "<p>This alien isn't big enough to eat all those vines. If only he was a little bigger.</p><br>";
$placeFood = "<p>You cover the vines in that gross looking food you found in the kitchen.</p><br>";
$alienEat = "<p>It works! The alien eats through the vines while munching on the food.</p><br>";
$climbDown = "<p>You climb down the ladder.</p><br>";
//ladder
$safeLanding = "<p>You jump from the ladder and hope that you don't hurt yourself. Whether you mean to or not, you land on the packing peanuts that you had picked up earlier and are completely undamaged.</p><br>";
$painLanding = "<p>You jump from the ladder and hope that you don't hurt yourself but you do, badly. Maybe some cushioning would have been a good idea!</p><br>";
//final
$bar = "<p>You take the missing ladder bar.</p><br>";
$ladderFix = "<p>You place the missing bar back where it belongs and are now able to climb back up.</p><br>";
$noClimb = "<p>You can not climb back up there while the ladder is in that shape.</p><br>";
$climbUp = "<p>You climb up the ladder.</p><br>";
?>