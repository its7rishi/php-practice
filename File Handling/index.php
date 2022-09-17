<?php

// readfile("<filename>") => To read file also returns the number of bytes read
// echo readfile("webdictionary.txt");

// fopen() = Open file

// Syntax: fopen("<filename>", "<mode>") -- mode(r/w/a/x/r+/w+/a+/x+)

/*
r = read only mode
w = write only mode. will delete exisiting data. Creates a new file if filename does not exist. Pointer starts at the begining of the file

a = write only mode. Preserves existing data. Pointer starts at end of file. Creates a new file if filename does not exist.

x = Creates a new file in write only mode. Returns FALSE if file already exist

r+ = Open file for read/write. Pointer starts at begining of the file.

w+ = Opens file for read/write. Erases the contents of the file. Creates new file if filename does not exist. Pointer starts at the begining of the file.

a+ = Opens a file for read/write. Preserves existing content. Pointer starts at end of the file. Creates a nef file if filename does not exist.

x+ = Creates a new file for read/write. Returns false if filename already exists

*/

// $myfile = fopen("webdictionary.txt", "r") or die("unable to open file");
// echo fread($myfile, filesize("webdictionary.txt"));
// fclose($myfile);


// fread() => reads from open files
// It takes two parameters = 1. filename & 2. No of max no. of bytes to read

// fclose() = close an open file
// It is good practice to close files after finishing working on them.



// fgets() = read a single line from a file.

// $myfile = fopen("webdictionary.txt", "r") or die("unable to find file");
// echo fgets($myfile);
// fclose($myfile);


// feof() => checks if end of file has been reached

// $myfile = fopen("webdictionary.txt", "r") or die("File not found");
// // Output one line untill end-of-file
// while (!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
// }
// fclose($myfile);

//  fgetc() = reads a single character from a file

// $myfile = fopen("webdictionary.txt", "r") or die("unable to open file");
// Output characters till end of line

// while (!feof($myfile)) {
//     echo fgetc($myfile);
// }
// fclose($myfile);


// ------------------------ FILE CREATION AND UPLOAd ----------------------------------

//  fopen() => can also be used to create a file. The mode should be write (w) or append (a)
// fwrite() => to write a file. Takes 2 parameters. 1. filename & 2. string to be written

// $myfile = fopen("testfile.txt", "w") or die("unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);

//  Overwrite File

// $myfile = fopen("testfile.txt", "w") or die("Unable to open file");
// $txt = "Mickey Mouse\n";
// fwrite($myfile, $txt);
// $txt = "Minnie Mouse\n";
// fwrite($myfile, $txt);
// fclose($myfile);


//  Append File

$myfile = fopen("testfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Daisy Duck\n";
fwrite($myfile, $txt);
fclose($myfile);
