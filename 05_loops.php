<?php

// for loop, endfor optional
$a = 0;
$b = 0;
/*for ($x = 0; $x <= 10; $x++) {
    echo 'post counter: ' . $a++ . '<br>';
    echo 'pre counter: ' . ++$b . '<br>';
    echo $x;
    echo ++$x;
    echo "<br><br>";
}*/


// pre & post incrementation
for ($x = 0; $x <= 5; $x++) {
    echo 'post counter: ' . $a++ . '<br>';
    echo 'pre counter: ' . ++$b . '<br>';
    echo '<br>';
}

// while loop, endwhile optional

$c = 1;
while ($c <= 5) {
    echo 'Num: ' . $c . '<br>';
    $c++;
}

// do while loop
$x = 7;
do {
    echo 'num: ' . $x . '<br>';
    $x++;
} while ($x <= 5); // first iteration guaranteed

/* analyze later:
 * do {
    if ($i < 5) {
        echo "i is not big enough";
        break;
    }
    $i *= $factor;
    if ($i < $minimum_limit) {
        break;
    }
    echo "i is ok";

} while (0);*/

// foreach

$arr = ['apple', 'banana', 'coconut'];
foreach ($arr as $fruit) {
    echo $fruit . '<br>';
}

$arr_2 = [
    1 => 'apple',
    2 => 'banana',
    3 => 'coconut'
];
foreach ($arr_2 as $fruit) {
    echo 'this: ' . $fruit . '<br>';
}

foreach ($arr_2 as $num => $fruit) {
    echo 'num: ' . $num . ' ' . $fruit . '<br>';
}
echo '<ul>';
foreach ($arr_2 as $num => $fruit) {
    switch ($num) {
        case 2:
            echo '<li>' . 'This is banana!' . '<br>';
            break; // have to set break
        default:
            echo '<li>' . 'Number: ' . $num . ' name: ' . $fruit . '<br>';
    }
}
echo '</ul>';
echo '<ul>';
foreach ($arr_2 as $num => $fruit) {
    switch ($num) {
        case 2:
            $arr_2[$num] = 'case 2';
            echo '<li>' . "This is: {$fruit}" . '<br>';
            echo '<li>' . "This is updated value: {$arr_2[$num]}" . '<br>';
            break;
        default:
            echo '<li>' . 'Number: ' . $num . ' name: ' . $fruit . '<br>';
    }
}

print_r($arr_2);

// reference - https://www.php.net/manual/en/language.references.whatdo.php
