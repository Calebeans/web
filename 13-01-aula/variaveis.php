<?php
$a = 10;
$b = 10.65;
$c = false;
$d = 'Jonas';
$e = "$d Carvalho";

echo $a, ' ', $b, ' ', $c, ' ', $d, ' ', $e;

echo '<br>';

echo gettype($c);

echo '<br>';
echo is_integer($a);
echo '<br>';

var_dump($e);