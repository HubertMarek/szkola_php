<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <?php
    $pass = $_GET['password'];
    $color = $_GET['color'];

    switch ($color) {
      case 'red':
        $color = "czerwony";
        break;
      case 'green':
        $color = "Zielony";
        break;
      case 'blue':
        $color = "Niebieski";
        break;
    }
    // różne sposoby na wyświetlenie danych
    echo '<pre>', print_r($_GET), '</pre>';
    echo <<<DATA
    Login: $_GET[login]<br>
    Hasło: {$_GET['password']}<br>
    Hasło: $pass<br>
    Kolor: $color
DATA;
     ?>
  </body>
</html>
