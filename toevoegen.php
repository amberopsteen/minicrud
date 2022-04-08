<?php
  require_once("includes/session.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Document</title>
  </head>
  <body>
    <?php
  require_once("includes/admin_header.php");
  
?>
    <div class="toevoegen_tabel">
    <h2>Menu toevoegen</h2>
      <table>
        <tr>
          <th>Gerechtnaam</th>
          <th>Prijs €</th>
          <th>Omschrijving</th>
          <th>Soort gerecht</th>
          <th>Afbeelding</th>
          <th>Opslaan</th>
        </tr>
        <tr>
          <form action="php/create.php" method="POST">
            <td><input type="text" name="naam" class="input_border"></td>
            <td><input type="text" name="prijs" class="input_border"></td>
            <td><input type="text" name="omschrijving" class="input_border"></td>
            <td><input type="text" name="soort_gerecht" class="input_border"></td>
            <td><input type="text" name="afbeelding" class="input_border"></td>
            <th><input type="submit" name="submit" class="button_admin"></th>
          </form>
        </tr>
      </table>
    </div>
  </body>
</html>
