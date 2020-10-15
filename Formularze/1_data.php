<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form action="./1_data_show.php" method="get">
      <input type="text" name="login" placeholder="Login"><br><br>
      <input type="password" name="password" placeholder="Hasło"><br><br>
      <h4>Ulubione kolory</h4>
      <input type="radio" name="color" value="red">Czerwony
      <input type="radio" name="color" value="green">Zielony
      <input type="radio" name="color" value="blue" checked>Niebieski
      <input type="submit" value="Zatwierdź dane">
    </form>
  </body>
</html>
