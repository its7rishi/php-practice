<?php

// Break / Continue

// Break statement is used to jump out of a loop;

// for ($x = 0; $x <= 10; $x++) {
//     if ($x == 4) {
//         break;
//     }
//     echo "The number is: $x <br>"; //will jump out of the loop after $x equals 3
// }


// Continue statement breaks one iteration (in the loop),if a specified condition occurs, and continues with the next iteration in the loop.

// for ($x = 0; $x <= 10; $x++) {
//     if ($x == 5) {
//         continue;
//     }
//     echo "The number is $x <br>"; // will skip the iteration when x is 5
// }

for ($x = 0; $x <= 100; $x++) {
    if ($x % 5 != 0) {
        continue;
    }
    echo "The number is $x <br>";
}
