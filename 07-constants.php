<?php
// CONSTANTS
//Sytax ---->  define(name, value, case-sensitive)


// Case Sensitive --- default is always false

// define("GREETING", "Welcome to PHP World!");
// echo GREETING;
// echo greeting; // Will throw error


// Case Insensitive
// define("GREETING", "I am case-insensitive!", true);

// echo greeting;   // Will thorw error as case-insensitive has been deprecated.

// Constant Arrays
define("cars", [
    'Ferrari',
    'Mercedez',
    'Audi',
    'BMW',
    'Skoda',
]);

// echo cars[0];

// Constants are automatically global and can be used across the entire script

function myTest()
{
    echo 'My favourite car is: ' . cars[4];
}

myTest();
