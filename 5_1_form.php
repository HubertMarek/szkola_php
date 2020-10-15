<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
    <?php
  if (!empty($_GET['surname']))
  {
    $surname = $_GET['surname'];
    if(!empty($surname)) 
    {
      echo "Nazwisko: $surname<hr>";
      echo "<a href=\"./5_1_form.php\">Powrót do formularza</a>";
    }
  }
  else
  {
    $formularz = <<<FORM
    <form method="get">
      <input type="text" name="surname" autofocus><br><br>
      <input type="submit" value="wyślij"><hr>
    </form>
FORM;
    echo $formularz;
    echo 'Wyślij formularz';

  }
   ?>

</body>
</html>
