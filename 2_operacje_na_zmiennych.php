<?php

$x = 1;
$y = 1;

if($x == $y)
{
  echo '$x jest równa $y';
}
else
{
    echo '$x nie jest równa $y';
}

if($x === $y)
{
  echo '$x jest identyczna jak $y';
}
else
{
    echo '$x nie jest identyczna jak $y';
}

echo gettype($x); // integer
echo gettype($y); // double

/*
  preinkrementacja ++$i
  predekrementacja --$1
  postdekrementacja $1--
  postinkrementacja $i++
*/

$x = 5;
$x = $x++;
echo $x; // 5
$x = ++$x;
echo $x; // 6
$y = $x++;
echo $x; // 7
echo $y; // 6
$y = ++$x * 2 - 1;
echo $x; // 8
echo $y; // 15
// operatory rzutowania
// bool, int, float, string, array, object, unset

$test1 = '123abc45';

echo '<hr>Typ danych $test1: ', gettype($test1), '<br>';
echo "$test1<br>";
$test1 = (int)$test1;
echo "$test1<br>";
echo 'Typ danych $test1: ', gettype($test1), '<br>';


$test2 = 0;

echo '<hr>Typ danych $test2: ', gettype($test2), '<br>';
echo "$test2<br>";
$test2 = (bool)$test2;
echo "$test2<br>";
echo 'Typ danych $test2: ', gettype($test2), '<br>';


$test3 = 0;

echo '<hr>Typ danych $test3: ', gettype($test3), '<br>';
echo "$test3<br>";
$test3 = (unset)$test3;
echo "$test3<br>";
echo 'Typ danych $test3: ', gettype($test3), '<br>';



?>
