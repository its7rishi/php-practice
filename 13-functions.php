<?php

// declare(strict_types=1);

// Functions

/*
    Syntax:
    function functionName(argument) {
        code to be executed
    }
*/

// User defined function;

function greet()
{
    echo "Hello <br>";
}

greet();

// function with arguments

// function add(int $x, int $y)
// {
//     return $x + $y;
// }

// echo add(3, 4);

// Specifying the variable type

function addNumbers(int $a, int $b)
{
    return $a + $b;
}

// echo addNumbers(34, 66); //will return 100 as both are integers
// echo addNumbers(5, "5 days"); // 5 days will be converted to int(5) since STRICT is not enabled. Will throw error in PHP 8.1


function addNums(int $a, int $b)
{
    return $a + $b;
}

// echo addNums(5, '5 days'); //wiil throw error

// Default values

function setHeight(int $minHeight = 50)
{
    echo "The minimum height is $minHeight <br>";
}

// setHeight(); //will return the default value if no arguments are provided
// setHeight(22); // will return 22

// Return type declarations

function addFloats(float $a, float $b): float
{
    return $a + $b;
}


// echo addFloats(1.23, -8.44);

// Passing arguments by Reference

function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
