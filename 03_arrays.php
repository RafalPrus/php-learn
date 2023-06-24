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

echo json_encode($users);
echo '<br>';
var_dump(json_encode($users));


//print_r($users);
//echo '<br>';
//echo $users[0]['first_name'] . ' ' . $users[0]['last_name'] . ' phone number is: ' . $users[0]['phone'][0] . ' and ' . $users[0]['phone'][1];






