<?php

//mat casmeron
//1/11/2022
//url https://mcameron.greenriverdev.com/328/ppt2/index.php
//pair program 2
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
</head>
<body>
<?php
include "functions.php";
echo "<p>1. PHP Array practice</p>";

$numbers = array("7","9","8","9","8","8","6","20");


echo "<p>step 2</p>";
printArr($numbers);
echo "largest " .largest($numbers);
echo "<br>";
print_r($numbers) ;
echo "<br>";
$numbersRemove = removeDups($numbers);
echo "<br>";
print_r($numbersRemove) ;


?>

</body>
</html>





<?php



