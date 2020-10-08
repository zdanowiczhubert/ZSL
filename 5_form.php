<!DOCTYPE html>
<html lang=pl dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>

    <?php
      // isset()
      if (!empty($_GET['surname'])) {
        $surname = $_GET['surname'];
        echo "Nazwisko: $surname<hr>";
        echo '<a href="./5_form.php">Powrót do formularza</a>';

      }else{
        echo <<<FORM
        <form method="get">
            <input type="text" name="surname" autofocus><br><br>
            <input type="submit" name="wyślij" value="wyślij"><hr>
        </form>
FORM;
      }
    ?>
  </body>
</html>
