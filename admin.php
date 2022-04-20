  <?php
    require_once("includes/admin_header.php");
  ?>
  <body>
    <?php
      $sql = "SELECT * FROM menu";
      $stmt = $connect->prepare($sql); 
      $stmt->execute(); 
      $result = $stmt->fetchAll(); 
      ?>

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
          <th><a href="wijzigen.php?id=<?php echo $menu['ID']; ?>" class="button_admin">wijzigen</a></th>
          <th>
            <form method="POST" action="php/delete.php">
              <input name="id" value="<?php echo $menu['ID']; ?>"type="hidden" readonly>
              <input type="submit" name="verwijderen" value="verwijderen" class="button_admin">
            </form>
            </th>
        </tr>
        <?php }
        ?>
      </table>
    </div>
  </body>
</html>
