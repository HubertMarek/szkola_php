<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
  <form method="get">
    <input type="text" name="surname" autofocus><br><br>
    <input type="submit" value="wyślij"><hr>
  </form>

  <?php
  if (!empty($_GET['surname']))
  {
    $surname = $_GET['surname'];
    if(!empty($surname))
    {
      echo "Nazwisko: $surname";
    }
  }
  else
  {
    echo 'Wyślij formularz';
  }
   ?>

</body>
</html>
