<?php
/****** Intro to PHP:  Lesson 3 Math Operators*******/


// Addition
$hrsPlayedMon = 10;
$hrsPlayedTues = 9;
$hrsTotal = $hrsPlayedMon + $hrsPlayedTues;
echo $hrsTotal;
echo "<br>";

// Subtraction
$hrsDifference = $hrsPlayedMon - $hrsPlayedTues;
echo $hrsDifference;
echo "<br>";

// Multiplication
define("NUMBER_WEEK_DAYS", 7);
$weekMultiple = NUMBER_WEEK_DAYS * $hrsPlayedMon;
echo $weekMultiple;
echo "<br>";

// Division
$daysCounter = 2;
$avgDailyHours = $hrsTotal / $daysCounter;
echo $avgDailyHours;
echo "<br>";

// Exponents
$monSquared = $hrsPlayedMon ** 2;
echo $monSquared;
echo "<br>";

// Negation
$currentLevel = 1;
echo 'You completed level: ' . $currentLevel++;
echo "\n";
echo "You are now on level ".$currentLevel;
echo "\n";

// Pre-increment:  Increments $a by one, then returns $a.
$currentLevel = 1;
echo ++$currentLevel;
echo " ".++$currentLevel;
echo "<br>";

// Post-decrement:  Decrements $a by one, then returns $a.
$livesLeft = 3;
echo $livesLeft-- . " ";
echo $livesLeft-- . " ";
echo $livesLeft-- . " ";
echo "\n";
// Pre-decrement:  	Returns $a, then decrements $a by one.
$liveLeft = 3;
echo --$liveLeft . " ";
echo --$liveLeft . " ";
echo --$liveLeft . " ";
echo "<br>";

?>
