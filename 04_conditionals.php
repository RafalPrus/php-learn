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





