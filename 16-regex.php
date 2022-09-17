<?php

// REGEX = Regular Expressions

// preg_match()  = returns 1 if the pattern was found in the string and 0 if not

$str = "Visit w3schools";
$pattern = "/w3schools/i";
// echo preg_match($pattern, $str);

// preg_match_all() = returns the number of times the pattern was found in the string. May also be 0

$sentence = "The rain in spain falls mainly on the plains.";
$pattern = "/ain/i";
// echo preg_match_all($pattern, $sentence);


// preg_replace() = returns a new string where the matched pattern ahs been replaced by another string

$msg = "Visit Microsoft";
$pattern = "/microsoft/i";
// echo preg_replace($pattern, "W3Schools", $msg);

$fruits = "Apples and bananas.";
$pattern = "/ba(na){2}/i"; //will search two instances of (na) and retrun the count.
echo preg_match($pattern, $fruits);
