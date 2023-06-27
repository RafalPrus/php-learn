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
echo '</ul>';
print_r($arr_2);

// reference - https://www.php.net/manual/en/language.references.whatdo.php


$a =& $g;
echo gettype($a);

echo '<br>';
$arr_loop = ['cat', 'dog', 'wolf', 'tiger'];
echo '<p>first loop: </p><br>';
foreach ($arr_loop as $animal) {
    echo $animal . '<br>';
    $animal = $animal . '+ loop'; // this isn't working, need reference sign
}
echo '<p>second loop: </p><br>';
foreach ($arr_loop as $animal) {
    echo 'after first loop: ' . $animal . '<br>';
}
echo '<p>third loop: </p><br>';
foreach ($arr_loop as &$animal) {
    echo $animal . '<br>';
    $animal = $animal . '+ loop'; // this is working, reference used (&)
}
echo '<p>fourth loop: </p><br>';
foreach ($arr_loop as $animal) {
    echo 'after first loop: ' . $animal . '<br>';
}

$accociative_arr_loop = [
    'first' => 'John',
    'second' => 'Susan',
    'third' => 'Mark',
    'fourth' => 'Caroline'
];

foreach ($accociative_arr_loop as $position => $name) {
    echo 'Your position is: ' . $position . ' and name is: ' . $name . '<br>';
}

$counter = 0;
/* won't work, can't use referenece in key
foreach ($accociative_arr_loop as &$position => $name) {
    echo 'Your position is: ' . $position . ' and name is: ' . $name . '<br>';
    $counter++;
    $position = $counter; 
}*/
echo '<b> NEXT</b><br>';
foreach ($accociative_arr_loop as $position => &$name) {
    echo 'Your position is: ' . $position . ' and name is: ' . $name . '<br>';
    echo 'frist counter: ' . $counter . '<br>';
    $counter++;
    echo 'second counter: ' . $counter . '<br>';
    $name = $counter;
    echo 'third counter: ' . $counter . '<br>';
}
echo '**************<br>';
print_r($accociative_arr_loop);

foreach ($accociative_arr_loop as $pos => $name_) {
    echo 'Your position is: ' . $pos . ' and name is: ' . $name_ . '<br>';
} // warning: using same values names in many foreach loops can make some strange output!

$users = [
    123 => 'Joe',
    124 => 'Laura',
    125 => 'Dennis',
    126 => 'Karen'
];
do {
    array_splice($users, 0, 1, );
} while (count($users) > 2);

foreach ($users as $id => $user_name) {
    echo $id . ': ' . $user_name . '<br>';
}

$users_2 = ['Joe', 'Laura', 'Dennis', 'Karen'];
echo 'for loop example: <br>';
for ($i=0; $i < count($users_2); $i++) {
    echo $users_2[$i] . '<br>';
}
echo '<br><br>';
// for vs foreach vs while
$students = ['Joe', 'Laura', 'Dennis', 'Karen'];
for ($i=0; $i < count($students); $i++) {
    echo 'nr: ' . $i . ' Name: ' . $students[$i] . '<br>';
}
echo '<br><br>';
foreach ($students as $index => $student_name) {
    echo 'nr: ' . $index . ' Name: ' . $student_name . '<br>';
}
echo '<br><br>';
$counter = 0;
$loops = count($students);
while ($counter < $loops) {
    echo 'nr: ' . $counter . ' Name: ' . $students[$counter] . '<br>';
    $counter++;
}