<?php
$txt = 'Hello World!';
echo $txt, '<br>';

// STR LENGTH
echo "String length is: ", strlen($txt), "<br>";

// WORD COUNT

echo "Word count is: ", str_word_count($txt), "<br>";

// STR REVERSE

echo "Reversed string is: ", strrev($txt), '<br>';

// STR POS - Search for a text within a string. Returns character position of the first match. False if not found.

echo "Position of  the word WORLD is: ", strpos($txt, 'World'), "<br>";

// STR REPLACE

echo "Replacing WORLD with RISHI: ", str_replace('World', 'Rishi', $txt), "<br>";
