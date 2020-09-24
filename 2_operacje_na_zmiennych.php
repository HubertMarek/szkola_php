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
 ?>
