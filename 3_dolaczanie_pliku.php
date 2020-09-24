<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width",initial-scale="1.0">
  <title>Plik</title>
</head>

<body>
  Początek pliku<hr>
  <?php
    echo 'Include:<br>';
    include './3_1_file.php'; // używamy gdy coś dobrze by było na stronie, ale w przypadku błędu nie zatrzyma PHP
    include_once './3_1_file.php';

    echo 'Require:<br>';
    require './3_1_file.php'; // używamy, gdy coś jest niezbędne do działania strony
    require_once './3_1_file.php';
  ?>
   Koniec pliku
</body>
</html>
