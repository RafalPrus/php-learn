<?php
// simple array
$numbers = [1, 2, 3, 50];
$names = array('Adam', 'Tom', 'Christopher');
//print_r($numbers);
//echo "<br>";
//var_dump($names);

$colors = [
    1 => 'orange',
    2 => 'blue',
    3 => 'black'
];

$colors[4] = 'yellow';
$colors[5] = 'white';


//print_r($colors);

$hex = [
    'red' => '#f00',
    'blue' => '#f0f0'
];

$user = [
    'first_name' => 'John',
    'last_name' => 'Kowalski',
    'email' => 'john@gmail.com'
];

//echo 'hello ' . $user['first_name'];

$users = [
    [
        'first_name' => 'John',
        'last_name' => 'Kowalski',
        'email' => 'john@gmail.com',
        'phone' => [12345, 2249238]
    ],
    [
        'first_name' => 'Brad',
        'last_name' => 'Nolan',
        'email' => 'bradn@gmail.com'
    ],
    [
        'first_name' => 'Agatha',
        'last_name' => 'Pitt',
        'email' => 'agatha@gmail.com'
    ]
];


// it is incorrect, only str and int can be keys in array
/*$incorrect_array = [
    [12345, 2249238] => 'nums'
]*/

$numered_array = [
    '1' => 'first',
    '02' => 'second',
    '3.45' => 'third',
    '+4' => 'fourth',
    'name' => 'fifth'
];
var_dump($numered_array);
echo '<br>';
print_r($numered_array);
echo '<br>';
echo json_encode($users);
echo '<br>';
var_dump(json_encode($users));

echo '<br>';
echo '<br>';
$overwritten_array = [
    1 => 'one',
    '1' => 'two',
    true => 'three',
    null => 'four',
    '' => 'five'
];

print_r($overwritten_array);
echo '<br>';
var_dump($overwritten_array);

function getArray() {
    return array(1, 2, 3);
}

$secondElement = getArray()[1];
echo '<br>';
echo '<br>';
echo $secondElement;
//print_r($users);
//echo '<br>';
//echo $users[0]['first_name'] . ' ' . $users[0]['last_name'] . ' phone number is: ' . $users[0]['phone'][0] . ' and ' . $users[0]['phone'][1];

// adding new element to array
$basic_array = [1, 2, 3, 4];
$basic_array_2 = [1, 2, 3, 4];
array_unshift($basic_array, 'apple', 'banana');
print_r($basic_array);
echo '<br>';

$basic_array[] = 5;
$basic_array[] = 5;

// array_push, array_pop, array_shift, array_unshift, array[] = value
print_r($basic_array);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
array_push($basic_array, 'apple', 'banana');
$element = array_pop($basic_array);
print_r($basic_array);
echo '<br>';

print_r($element);
echo $element;
echo gettype($element);
echo '<br>';
print_r($basic_array);

$empty_arr = [];
$popped_element = array_pop($empty_arr);
echo $popped_element . ' ' . gettype($popped_element);
print_r($empty_arr);
echo "<br><br>";
array_unshift($basic_array, $basic_array_2);
print_r($basic_array);
echo '<br>';
echo '<br>';
array_unshift($empty_arr, array_shift($basic_array));
print_r($empty_arr);

// array_merge
echo '<br>';
echo '<br>';
echo 'basic: <br>';
print_r($basic_array);
echo '<br>';
echo 'basic_2: <br>';
print_r($basic_array_2);
echo '<br>';
$merged_array = array_merge($basic_array, $basic_array_2);
print_r($merged_array);
echo '<br>';
$fruits = ['apple', 'banana', 'orange'];
$orange_fruits = ['orange', 'grapefruit'];
$merged_fruits = array_merge($fruits, $orange_fruits);
print_r($merged_fruits);
echo '<br>';

// array merge associative arrays
$fruits_2 = [
    'apple' => 'green',
    'lemon' => 'yellow',
    'grape' => 'violet'
];
$fruits_3 = [
    'orange' => 'orange',
    'apple' => 'red',
    'coconut' => 'brown'
];
$merged_fruits_colors = array_merge($fruits_2, $fruits_3);
print_r($merged_fruits_colors);
echo '<br>';

// array_slice
// echo $cars[-1]; not allowed
$cars = ['bmw', 'opel', 'vw', 'audi'];
$s_cars = array_slice($cars, 1);
print_r($s_cars);
echo '<br>';
$s_cars_rev = array_slice($cars, -2);
print_r($s_cars_rev);
echo '<br>';
// with length
$cars_02 = ['bmw', 'opel', 'vw', 'audi'];
$sliced = array_slice($cars_02, -3, 2);
print_r($sliced);

// array_splice
$simple_arr = [1, 2, 3, 4, 5];
array_splice($simple_arr, -3, replacement: ['x', 'y']);
$splice = array_splice($simple_arr, -3, replacement: ['x', 'y']);
echo '<br>';
print_r($splice);
echo '<br>';
print_r($simple_arr);
echo '<br>';

// count
$name = 'Harry';
// echo count($name); string is not countable, new class have to implement Countable interface to be countable
$basic_arr = ['one', 2, 3, 'green', 'category'=> 'movie'];
echo count($basic_arr);
echo '<br>';

// in_array
$players = ['Harry', 'Henry', 'Tom'];
$players_details = [
    'Carol' => 'lvl 9',
    'Susan' => 'lvl 12'
];
$players['group'] = $players_details;
switch (in_array('Harry', $players)) {
    case true:
        echo 'Harry is in array' . '<br>';
        break;
    default:
        echo 'Harry is not in array' . '<br>';
}

switch (in_array('Carol', $players_details)) {
    case true:
        echo 'Carol is in array' . '<br>';
        break;
    default:
        echo 'Carol is not in array' . '<br>';
}

/* IMPORTANT not working, learn later how to check if key => value pair exists in associative array
 * switch (in_array(('Carol' => 'lvl 9'), $players_details)) {
    case true:
        echo 'Carol is in array' . '<br>';
        break;
    default:
        echo 'Carol is not in array' . '<br>';
}*/

switch (in_array($players_details, $players)) {
    case true:
        echo 'players_details arr in players' . '<br>';
        break;
    default:
        echo 'players_details arr not in players' . '<br>';
}


