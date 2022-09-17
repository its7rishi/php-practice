<?php
// CONDITIONAL STATEMENTS

// if...

// $t = date("H");

// if ($t < '21') {
//     echo "Have a good day";
// }

// if...else

// $t = date("H");

// if ($t < "20") {
//     echo "Have a good day";
// } else {
//     echo "Have a good night";
// }


//if....else if ..... else

$t = date('H');

if ($t < 12) {
    echo "Good Morning";
} elseif ($t < 17) {
    echo "Good Afternoon";
} elseif ($t < 21) {
    echo "Good Evening";
} else {
    echo "Good Night";
}
