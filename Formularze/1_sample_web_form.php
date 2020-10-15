<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    tr, td
    {
      border: 1px solid black;
    }
    textarea
    {
      width: 100%;
      height: 100%;
      box-sizing: border-box;
    }
    </style>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form action="" method="get">
      <table>
        <tr>
          <td>Name</td>
          <td><input type="text" name="name"></td>
        </tr>
        <tr>
          <td>Sex</td>
          <td>
            <input type="radio" name="sex" value="male">Male<br>
            <input type="radio" name="sex" value="female">Female
          </td>
        </tr>
        <tr>
          <td>Eye color</td>
          <td>
            <select name="eye">
              <option value="green">Green</option>
              <option value="blue">Blue</option>
              <option value="brown">Brown</option>
            </select>
          </td>

        </tr>
        <tr>
          <td>Check all that apply</td>
          <td>
            <input type="checkbox" name="over_6" value="over_6">Over 6 feet tall<br>
            <input type="checkbox" name="over_200" value="over_200">Over 200 pounds
          </td>
        </tr>
        <tr>
          <td colspan="2">
            Describe your athletic ability:<br>
            <textarea name="ability" rows="4" cols="40"></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2"><center><input type="submit" value="Enter my information"></center></td>
        </tr>
      </table>
    </form>
    <?php
      if(!empty($_GET))
      {
        echo <<<DATA
        <h1>Wynik:</h1>
        Imię: $_GET[name]<br>
        Płeć: $_GET[sex]<br>
        Kolor oczu: $_GET[eye]<br>
DATA;
if($_GET['over_6'] == 'over_6')
{
  echo "Ponad 6 stóp: true<br>";
}
if($_GET['over_6'] == '')
{
  echo "Ponad 6 stóp: false<br>";
}
if($_GET['over_200'] == 'over_200')
{
  echo "Ponad 200 funtów: true<br>";
}
if($_GET['over_200'] == '')
{
  echo "Ponad 200 funtów: false<br>";
}
echo <<<DATA2
        Opis: $_GET[ability]<br>
DATA2;
      }
     ?>
  </body>
</html>
