<?php



//hier komen de requires


declare(strict_types=1);

//include all your model files here

//include all your controllers here
require 'Controller/homepagecontroller.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!




<!--//file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] ) : int



/*$file = 'guestbook.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current1 = "Joeri Lapin1\n";
//$current2 = "Joeri Lapin2\n";
// Write the contents back to the file
file_put_contents($file, $current1);
//file_put_contents($file, $current2);
echo($current1);
//echo($current2);*/

echo 'test';
$control= new HomeController
$control->render();



?>


