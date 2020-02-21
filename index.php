<?php
//file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] ) : int



$file = 'guestbook.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current1 = "Joeri Lapin1\n";
//$current2 = "Joeri Lapin2\n";
// Write the contents back to the file
file_put_contents($file, $current1);
//file_put_contents($file, $current2);
echo($current1);
//echo($current2);



