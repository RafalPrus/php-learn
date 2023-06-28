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



