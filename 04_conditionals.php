<?php

$age = 6;
/*if ($age >= 18) {
    echo 'You can vote!';
} else {
    echo 'Sorry, you are too young to vote.';
}*/

$t = date('l');
//echo $t;

$hour = date("H");
/*if ($hour < 12) {
    echo 'Good morning!';
} elseif ($hour < 17) {
    echo 'Good Afternoon';
} else {
    echo 'Good Evening';
}*/

if (!$hour) {
    echo 'It is: ' . $hour;
}


$empty_str = '';



$empty_arr = [];
if ($empty_arr) {
    echo 'arr is not empty';
} else {
    echo 'arr is empty';
}


$zero_str = '0';
if ($zero_str) {
    echo 'str is not false';
} else {
    echo 'str is false';
}
// https://kunststube.net/isset/ more about isset and empty functions

/*if ($empty_arr[0]) {
    echo 'it is working';
} else {
    echo 'it is not working';
}

warning, udefined array*/

echo '<br>';

if (empty($empty_arr[0])) {
    echo 'it is empty';
} else {
    echo 'it is not empty';
}

echo '<br>';
$one = 'ABC';
$two = 'abc';
if ($one and !$two) {
    echo 'one is true and two is false';
} else {
    echo 'not pass';
}

echo '<br>';

if ($one or !$two) {
    echo 'one is true or two is false';
} else {
    echo 'not pass';
}

//$one += $two; not working


// working:
$b = "Hello ";
$b .= "World!";
echo $b;

echo '<br><br>';

// ternary operator
$foo = !$b ? 'is empty' : 'is not empty';
echo $foo;

if (!$b) {
    echo 'is empty';
} else {
    echo 'is not empty';
}

echo '<br><br>';
$action = empty($_POST['action']) ? 'default' : $_POST['action'];
echo $action;

echo '<br><br>';
// echo (true ? 'true' : false ? 't' : 'f'); deprecated

echo ((true ? 'true' : false) ? 't' : 'f');
echo '<br><br>';

//$word = 'hello';
$sentinel = !empty($word) ? 'not empty' : 'empty';
if ($sentinel == 'empty') {
    echo 'word is empty';
} else {
    echo "word is not empty, it contain: {$word}";
}
echo '<br><br>';

// null coalescing operator
$check_null = null;
$first_check = $check_null ?? 'it was null';
echo $first_check;

// loose comparison
echo '<br><br>';
$a = 10;       // integer
$b = "10";     // string

if ($a == $b) {
    echo "Equal";
} else {
    echo "Not equal";
}

// switch case
$fav_color = 'yellow';

switch($fav_color) {
    case 'red':
        echo 'Your fav is red';
        break;
    case 'blue':
        echo 'Your fav is blue';
        break;
    default:
        echo 'we dont know your fav color';
}








