<?php
// first one line comment
// 1
$first_arr = [1, 2, 3];
$first_str = 'hello';
echo 'First: ' . "<br>";
print_r($first_arr);
echo "<br>";
echo 'Second: ' . "<br>";
echo $first_arr[1];
echo '<br><br>';
var_dump($first_arr);
echo "<br>";
echo 'Hello World!!! :)';
echo "\r\n";
echo 123, 'Hello world';
$new_line = '<br><br>';
echo $new_line;
$result_print_r = print_r($first_arr, true);
echo gettype($result_print_r);
echo $result_print_r;
echo $new_line;
print_r($first_str);
echo $new_line;
print $first_str;
$new_type = print $first_str;
echo $new_type;
print_r($first_arr);

    /*
     * multiple
     * lines
     * comments
     * test
     */
// 2
var_dump('hello');
var_dump($first_arr);
var_export($first_arr);
$d = array('one', 'two', 'three');
echo var_export($d) . "<br>";
echo '<br>';
echo 'var_export: ' . '<br>';
var_export($d);
echo '<br>';
echo '<br>';
echo 'var_dump: ' . '<br>';
var_dump($d);



