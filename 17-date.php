<?php
// echo "Today is " . date("Y/m/d") . "<br>";
// echo "Today is " . date("Y.m.d") . "<br>";
// echo "Today is " . date("Y-m-d") . "<br>";
// echo "Today is " . date("l");
?>

<!DOCTYPE html>
<html>

<body>
    &copy; 2010-<?php echo date("Y"); ?>
    <br>
</body>

</html>

<!-- Time -->

<?php
// H => Hours in 24 hour format
// h => Hours in 12 hour format
// i => Minutes with leading zeros (00 to 59)
// s => Seconds with leading zeros (00 to 59)
// a => Lowercase am & pm 
// l => Weekday

echo "The time is: " . date("h:i:sa") . "<br>";

// Get your time zone

date_default_timezone_set("Asia/Kolkata");
// echo "The time in India is: " . date("h:i:sa");

// mktime(hour, minute, second, month, day, year) => create date

// $d = mktime(11, 14, 54, 9, 14, 2022);
// echo "Created date is " . date("d-m-Y h:i:sa", $d);


// strtotime(time, now) => create a date from a stiring

// $d = strtotime("10:20pm April 15 2022");
// echo "Created date is: " . date("d-m-Y h:i:sa", $d);

// $d = strtotime("tomorrow");
// $d = strtotime("next Saturday");
// $d = strtotime("+3 Months");
// echo date("d-m-Y h:i:sa", $d);

// $start_date = strtotime("Saturday");
// $end_date = strtotime("+6 weeks", $start_date);

// while ($start_date < $end_date) {
//     echo date("M d", $start_date) . "<br>";
//     $start_date = strtotime("+1 week", $start_date);
// }


$d1 = strtotime("December 31");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
echo "There are " . $d2 . " days until 31 December";
