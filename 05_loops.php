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

