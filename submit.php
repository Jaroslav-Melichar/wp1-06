<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vyplněná data</h1>
      <?php
      $username = filter_input(INPUT_POST,'username');
      $password = filter_input(INPUT_POST,'password');
      echo "Bylo vyplněno jméno : $username <br> ";
      echo "Heslo bylo zadáno správně";

      if(($password >= 1892) && ($username == 'Jaroslav Melichar')) {
          echo "Uživatelské jméno a heslo bylo správně zadané";
      } else {
          echo "Máš smůlu a nepomatuješ si svoje údaje !";
      }

      
      ?>
</body>
</html>