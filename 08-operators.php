<?php
// Operators

// Array Operators
$x = array('a' => "red", "b" => "green");
$y = array('a' => "red", "b" => "green");
// $y = array("c" => "blue", "d" => "yellow");

// print_r($x + $y); //union of $x & $y
// print_r($x == $y); //returns true if $x and $y have the same key/value pairs;
// print_r($x === $y); //returns true if $x and $y have the same key/value pairs in the same order and same types


// Conditional Assignment Operators

// Ternary Operator

// if empty($user)= TRUE, set $status = 'anonymous'
// echo $status = (empty($user)) ? "anonymous" : "logged in";
echo "<br>";

$user = "John Doe";
// if empty($user) = FALSE, set $status = 'logged in'
// echo $status = (empty($user)) ? "anonymous" : "logged in";
// 

// Null Coalescing Operator
// variable $color is red if $color does not exist or is null
// $color = "pink";
// echo $color = $color ?? "red";
