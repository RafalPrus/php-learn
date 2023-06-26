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







