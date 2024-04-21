<?php 
$computer = "stone";
$player = "paper";


if($computer=="stone" && $player=="paper"
   || $computer=="scissors" && $player=="stone"
   || $computer=="paper" && $player=="scissors")
   {
    echo "computer win";
   }
   
   else{
      echo "player win";
   }
echo "<br/>";

if($computer=="paper" || $player=="stone")
{
    echo "computer win";
    
}

else{
    echo "player win";
}
//tic-toc-toe
echo "<br/>";
$number = 7; // Define the number that the player needs to guess

$userGuess = 5; // The player's guess

if ($userGuess < $number) {
    echo "Your guess is too low! Try again.";
} elseif ($userGuess > $number) {
    echo "Your guess is too high! Try again.";
} else {
    echo "Congratulations! You guessed the correct number.";
}









?>