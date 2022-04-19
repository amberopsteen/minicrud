<?php
  include ('../includes/connect.php');

  if(isset($_POST['wijzigen'])) {
    $id = $_POST['id'];
    $naam = $_POST['naam'];
    $prijs = $_POST['prijs'];
    $omschrijving = $_POST['omschrijving'];
    $soort_gerecht = $_POST['soort_gerecht'];
    $afbeelding = $_POST['afbeelding'];
  
    $sql = "UPDATE menu 
        SET naam = :naam, 
          prijs = :prijs, 
          omschrijving = :omschrijving,
          soort_gerecht = :soort_gerecht,
          afbeelding = :afbeelding 
        WHERE ID = $id";

    $stmt = $connect->prepare($sql);
    $stmt->bindparam(':naam', $naam);
    $stmt->bindparam(':prijs', $prijs);
    $stmt->bindparam(':omschrijving', $omschrijving);
    $stmt->bindparam(':soort_gerecht', $soort_gerecht);
    $stmt->bindparam(':afbeelding', $afbeelding);
    $stmt->execute();

    header('location: ../admin.php');
    exit();
  }
?>