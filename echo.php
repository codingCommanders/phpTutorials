<?php
/****** Intro to PHP:  Lesson 2 Echo Statements******/

// Print characters
echo "I love FPS!";
// Line break
echo "\n";

//Printing a Variable
// Declare variables
$gameTitle = "Wolfenstein";
$numStars = 5;
// Print variable
echo $gameTitle;
// <br> is an html tag that inserts a line break
echo "<br>";

// Concatenation
echo "I give " . $gameTitle . " " . $numStars . " stars!";
echo "<br>";

// Single quotes vs Double quotes
echo "I played $gameTitle today.";
echo "<br>";
echo 'I played $gameTitle today.';
 ?>
