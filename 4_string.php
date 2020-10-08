<?php

$replace = str_replace('%imie%', 'Janusz', 'Masz na imię: %imie%');
echo $replace,'<br>';

// przetwarzanie polskich znaków
$login = 'bączek';
$censure = array('ą', 'ę', 'ć', 'ż', 'ź', 'ń', 'ł', 'ó', 'ś');
$replace = array('a', 'e', 'c', 'z', 'z', 'n', 'l', 'o', 's');

$correctLogin = str_replace($censure, $replace, $login);

echo "Login: $login<br>Poprawny login:$correctLogin<br>";

// przeszukiwanie
$address = "Poznań, ul. Polna 4, tel. (61) 123 44 55";
$search = strstr($address, 'tel');
echo $search; // tel (61) 123 44 55

echo "<br>";

$address = "Poznań, ul. Polna 4, tel. (61) 123 44 55";
$search = stristr($address, 'Tel'); // Tel z dużej litery
echo $search; // tel (61) 123 44 55
echo "<hr>";

$mail = strstr('zsl@gmail.com', '@');
echo "$mail<br>";

$mail = strstr('zsl@gmail.com', 64); // znak ASCII
echo "$mail<hr>";

// substr
$name = 'anna';
echo substr($name, 0); // anna
echo "<br>";
echo substr($name, 3); // a
echo "<br>";
echo substr($name, 1, 2); // nn
echo "<br>";
$name = 'Krystyna';
echo substr($name, 3, 3); // sty

echo "<hr>";
// Pobierz domenę z dowolnego adresu poczty elektronicznej

$adres = "testest123@onet.xd";
$adres = stristr($adres, "@");
$adres = substr($adres, 1);
echo $adres;

?>
