<?php
// string
$first_str = 'Hello World';
// integer
$first_int = 1;
// float
$first_float = 1.25;
// bool
$first_bool = true;
// array
$first_arr = [1, 2, 3];
echo  $first_str . $first_bool . $first_float . $first_int;

$name = 'Alex';
$NAME = 'Tom';
echo 'Hello, my name is: ' . $name . '<br>';
echo "Hello, my name is: $NAME";
echo "Hello, my name is {$name}";

echo '<br>';
echo 5 + 5 . '<br>';
echo '5' + '6'; // ? check it later! - correct, weak typing
$var = '5.5' + '6';
echo $var;
echo gettype($var);


// named constant https://www.php.net/manual/en/function.define.php
define('HOST', 'localhost');
echo HOST;



