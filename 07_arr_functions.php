<?php
$users = ['Marcel', 'Bruno', 'John'];

// length of array
echo count($users);

// search array
var_dump(in_array('John', $users));
$users[] = 'Carol';
array_push($users, 'Philip', 'Kate');
array_unshift($users, 'Arnold');
print_r($users);

// remove from array
array_pop($users);
array_shift($users);
echo '<br><br>';
print_r($users);
echo '<br><br>';
function deleteThird($arr) {
    foreach ($arr as $index => $name) {
        echo $arr[$index] . '<br>';
        echo 'index: ' . $index . '<br>';
        if ($index == 2) {
            unset($arr[$index]);
            echo 'inside if: ' . '<br>';
            print_r($arr);
        }
    }
    echo 'inside function: <br>';
    print_r($arr);
}

deleteThird($users);
echo '<br><br>';
echo 'After function usage: <br>';
print_r($users);

