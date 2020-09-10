<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>zmienne</title>
  </head>
  <body>
    <?php
      $name='Janusz';
      $surname='Nowak';
      echo 'Imię $name<br>';
      echo "Imię $name<br>";
      // konkatenacja .
      echo "Nazwisko: $surname".'<hr>';


      //typy danych
      //boolean
      $prawda = true;
      $falsz = false;

      echo $prawda; // 1
      echo $falsz; // nic nie wyświetli

      // integer
      $calkowita = 20;
      $binarna = 0b1011; // 11
      $oct = 010; //8
      $hex = 0xA; //10

      echo "<hr>$hex<hr>";

      //składnia heredoc
      $name='Anna';
      $text = <<< ETYKIETA
      Imię: $name<br>
      Imię1: $name<br>

    ETYKIETA;

      echo $text;

      $surname='Kowal';
      echo <<< E
      Nazwisko: $surname<hr>
    E;

    // składnia nowdoc
     echo <<< 'E'
     Nazwisko: $surname<hr>
    E;

      $city='Poznań';
      echo "Nazwa zmiennej: \$city, wartość zmiennej: $city";   



     ?>

  </body>
</html>
