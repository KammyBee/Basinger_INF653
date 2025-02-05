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






?>