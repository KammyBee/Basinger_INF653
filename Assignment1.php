<?php
//Challenge 1
$num1 = 10;
$num2 = 5;


$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$modulus = $num1 % $num2;


echo "<div style='background-color: #f0f0f0; padding: 10px; width: 200px;'>";
echo "<i>Expected Output</i><br><br>";
echo "Number 1: $num1 <br>";
echo "Number 2: $num2 <br>";
echo "Addition: $addition <br>";
echo "Subtraction: $subtraction <br>";
echo "Multiplication: $multiplication <br>";
echo "Division: $division <br>";
echo "Modulus: $modulus <br>";
echo "</div>";

// Challenge 2
$number = 7;

if ($number % 2 == 0) {
    $result = "$number is an even number.";
} else {
    $result = "$number is an odd number.";
}

echo "<div style='background-color: #f0f0f0; padding: 10px; width: 250px;'>";
echo "<i>Expected Output</i><br><br>";
echo "Input: $number <br><br>";
echo "Output: $result";
echo "</div>";


// Challenge 3
$number = 10;

$incremented = ++$number;

$decremented = --$number;

echo "<div style='background-color: #f0f0f0; padding: 10px; width: 250px;'>";
echo "<i>Expected Output</i><br><br>";
echo "Starting number: 10 <br><br>";
echo "After increment: $incremented <br><br>";
echo "After decrement: $decremented <br>";
echo "</div>";

// Challenge 4
$marks = 60;

if ($marks >= 90) {
    $grade = "A";
} elseif ($marks >= 80) {
    $grade = "B";
} elseif ($marks >= 70) {
    $grade = "C";
} elseif ($marks >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "<div style='background-color: #f0f0f0; padding: 10px; width: 250px;'>";
echo "<i>Expected Output</i><br><br>";
echo "Input: $marks <br><br>";
echo "Output: You got a $grade!";
echo "</div>";


// Challenge 5
$year = 2023;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    $result = "$year is a leap year.";
} else {
    $result = "$year is not a leap year.";
}

echo "<div style='background-color: #f0f0f0; padding: 10px; width: 250px;'>";
echo "<i>Expected Output</i><br><br>";
echo "Input: $year <br><br>";
echo "Output: $result";
echo "</div>";



?>