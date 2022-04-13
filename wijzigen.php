<?php 
require_once("php/admin_header.php"); 
?>
<body>
    <?php $id = $_GET['id'];
      $sql = "SELECT * FROM menu WHERE id=$id";
      $stmt = $connect->prepare($sql); 
      $stmt->execute();
      $result = $stmt->fetchAll(); ?>
    <div class="tabel">
      <h2>Menu wijzingen en/of verwijderen</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Gerechtnaam</th>
                <th>Prijs €</th>
                <th>Omschrijving</th>
                <th>Soort gerecht</th>
                <th>Afbeelding</th>
                <th>Wijzigen</th>
            </tr>
          <tr>
            <form action="php/update.php" method="POST">
                <td><input type="text" value="<?php echo $result[0]['ID']; ?>" name="id" class="input_border_id" readonly></td>
                <td><input type="text" value="<?php echo $result[0]['naam']; ?>" name="naam" class="input_border"></td>
                <td><input type="text" value="<?php echo $result[0]['prijs']; ?>" name="prijs" class="input_border_prijs"></td>
                <td><input type="text" value="<?php echo $result[0]['omschrijving']; ?>" name="omschrijving" class="input_border"></td>
                <td><input type="text" value="<?php echo $result[0]['soort_gerecht']; ?>" name="soort_gerecht" class="input_border_gerecht"></td>
                <td><input type="text" value="<?php echo $result[0]['afbeelding']; ?>" name="afbeelding" class="input_border"></td>
                <th><input type="submit" name="wijzigen" class="button_admin"></th>
            </form>
          </tr>
        </table>
    </div>
  </body>
</html>
