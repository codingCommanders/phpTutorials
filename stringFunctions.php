<?php
/****** Intro to PHP:  String functions*******/

// Print: is a bit slower than echo and you are limited to one parameter
$gameDev = "Steve Howse";
print "Thee developer is $gameDev <br>";

// Change Case
$typeGame = "Online Browser";
$capType = strtoupper($typeGame);
$lowType = strtolower($typeGame);
echo $typeGame." ".$capType." ".$lowType;
// Real word example:  If you win (show example of you won screen)

// String length
$stringLength = strlen($typeGame);
echo "<br>".$stringLength;
?>
