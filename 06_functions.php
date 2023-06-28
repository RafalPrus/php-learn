<?php
// https://www.php.net/manual/en/functions.user-defined.php

welcome(); // It's working, you can call function before it is defined.
function welcome() {
    echo 'Hello world from function!' . '<br>';
}

welcome();
Welcome(); // case-insensitive
registerUser();
welcome();


$nick_name = 'Iron Man';
function registerUser() {
    global $nick_name; // global keyword for global reference, $GLOBALS later
    echo 'registration process... <br>';
    $user = 'Tony';
    echo $nick_name;
}

// reccursion
function counting($a) {
    if ($a == 0) {
        echo 'Booom!!!';
    } else {
        echo $a . '! <br>';
        $a--;
        counting($a);
    }
}

counting(10);

function welcomeUser($name) {
    echo 'Hello ' . $name . '! :) <br>';
}
$user_name = 'Tom';
welcomeUser($user_name);
welcomeUser('Dominic');

function sum($d, $e) {
    return $d + $e;
}

$result = sum(10, 15);
echo $result;

function sumDefault($d, $e = 20) {
    return $d + $e;
}

echo sumDefault(100);

// anonymus function https://www.php.net/manual/en/functions.anonymous.php

$substract = function ($var1, $var2) {
    return $var1 - $var2;
};
echo $substract(100, 55);
$num = 10;
$num2 = 20;
$expression = function ($var1, $var2) use ($num) {
    global $num2;
    $num2 = 111;
    $num = 100;
    return ($var1 - $var2) * $num;
};
echo '<br><br>';
echo $expression(100, 99);
echo '<br><br>';
echo $num; // won't change value of $num in global scope
echo '<br><br>';
echo $num2; // global allows to change value globally in function
// arrow function https://www.php.net/manual/en/functions.arrow.php

$arr = ['car', 'bike', 'airplane'];

function travelOptions($vehicles) {
    foreach ($vehicles as $index => $vehicle) {
        echo 'Option ' . $index + 1 . 'Vehicle type: ' . $vehicle . '<br>'; // generators? yield?
    }
}

travelOptions($arr);

function travelOptions2($vehicles) {
    foreach ($vehicles as $index => $vehicle) {
        yield 'Option ' . $index + 1 . 'Vehicle type: ' . $vehicle . '<br>';
    }
}
// echo travelOptions2($arr); don't work, error

foreach (travelOptions2($arr) as $value) {
    echo $value;
}