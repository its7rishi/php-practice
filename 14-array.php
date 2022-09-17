<?php
// Array

// The array() function is used to create an array

/*
Types of arrays in PHP:
    Indexed Arrays: Arrays with numeric indexes
    Associative Arrays: Arrays with named keys
    Multidimensional Array: Arrays containing one or more arrays
*/

// count() = get length of an array

// $fruits = array('apple', 'banana', 'orange', 'grape', 'watermelon', 'mango');

// echo count($fruits);

// Indexed Arrays
// $cars = array('Scorpio', 'Honda City', 'Thar', 'Breeza');

// echo "I like $cars[0] and $cars[3]";

//Loop through indexed arrays

// $arrLength = count($cars);

// for ($x = 0; $x < $arrLength; $x++) {
//     echo "$cars[$x] <br>";
// }


// Associative Arrays

//Two ways to create associative arrays

// Mehod 1

// $age = array("Peter" => "35", "Jane" => "27", "Mike" => "31");


// Method 2

// $age["Peter"] = "35";
// $age["Jane"] = "27";
// $age["Mike"] = "31";

// print_r($age);

// The named keys can be used in a script

// echo "Peter is " . $age['Peter'] . " years old";


// Loop through associative arrays

// $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

// foreach ($age as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }


// Multidimensional Arrays

// Two dimensional Arrays

// $cars = array(
//     array("Volvo", 22, 18),
//     array("BMW", 15, 13),
//     array("Saab", 5, 2),
//     array("Land Rover", 13, 15)
// );

// echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
// echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[2][2] . ".<br>";
// echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
// echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

// using for loop

// for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//         echo "<li>" . $cars[$row][$col] . "</li>";
//     }
//     echo "</ul>";
// }


// Sorting Arrays

// sort() = Sort indexed in ascending order

// $cars = array('Volvo', 'Mercedez', 'Audi', 'Jaguar', 'Ferrari', 'Bugatti', 'Lamborghini');

// sort($cars);

// $length = count($cars);

// for ($x = 0; $x < $length; $x++) {
//     echo $cars[$x];
//     echo "<br>";
// }

// rsort() = Sort indexed arrays in descending order

// $cars = array('Volvo', 'Mercedez', 'Audi', 'Jaguar', 'Ferrari', 'Bugatti', 'Lamborghini');

// rsort($cars);

// $length = count($cars);

// for ($x = 0; $x < $length; $x++) {
//     echo $cars[$x];
//     echo "<br>";
// }

// asort() = Sort array in ascending order according to value;
//arsort() = Sort array in descending order according to value;
// ksort() = Sort array in ascending order according to key;
// krsort() = Sort array in descending order according to key;


$age = array("Peter" => "85", "Ben" => "37", "Joe" => "43", "Cindy" => "18");

// asort($age);
krsort($age);

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . "Value=" . $x_value . "<br>";
}
