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
    <?php
    require_once("includes/connect.php");
      $sql = "SELECT * FROM menu";
      $stmt = $connect->prepare($sql); $stmt->execute(); $result =
    $stmt->fetchAll(); ?>
    <div class="tabel">
      <h2>Menu wijzingen en/of verwijderen</h2>
      <table>
        <tr>
          <th>Gerechtnaam</th>
          <th>Prijs €</th>
          <th>Omschrijving</th>
          <th>Soort gerecht</th>
          <th>Afbeelding</th>
          <th>Wijzigen</th>
          <th>Verwijderen</th>
        </tr>
        <?php foreach ($result as $menu){ ?>
        <tr>
          <th><?php echo $menu['naam'] ?></th>
          <th><?php echo $menu['prijs'] ?></th>
          <th><?php echo $menu['omschrijving'] ?></th>
          <th><?php echo $menu['soort_gerecht'] ?></th>
          <th><?php echo $menu['afbeelding'] ?></th>
          <th><a href="wijzigen.php" class="button_admin">wijzigen</a></th>
          <th>
            <a href="verwijderen.php" class="button_admin">verwijderen</a>
          </th>
        </tr>
        <?php }
    ?>
      </table>
    </div>
  </body>
</html>