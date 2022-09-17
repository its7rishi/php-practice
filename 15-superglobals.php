<?php
// Superglobals = predefined variables in PHP
// Always accessible regarless of scope
// Can be accessed from any function, class or file

/*
PHP superglobals are:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/


// $GLOBALS

// used to access global variables from anywhere in the PHP script (also from within functions or methods)
// PHP stores all global variables in an array called $GLOBALS[index]. The index holds variable name

// $x = 75;
// $y = 25;

// function addition()
// {
//     $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// addition();
// echo $z; // $z can be accessed outside the function as it is present in the $GLOBALS array



// $_SERVER

// super global variable. Holds information about headers, paths and script locations

// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER']; //if HTTP_REFERER is set then will be displayed
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];


//  $_REQUEST

// used to collect data after submitting html form
?>
<!-- 
<html>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "name is empty";
        } else {
            echo $name;
        }
    }
    ?>
</body>

</html> -->
<!-- 
<?php

// $_POST

// used to collect data after submitting HTML form with method 'POST'
// widely used to pass variables

?>

<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>

</body>

</html> -->



<?php

// $_GET

// used to collect form data after submitting form with method 'GET'

?>

<html>

<body>
    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>
</body>

</html>