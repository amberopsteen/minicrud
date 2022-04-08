<?php
      include ('../includes/connect.php');

      if(isset($_POST['submit'])) {
        $naam = $_POST['naam'];
        $prijs= $_POST['prijs'];
        $omschrijving = $_POST['omschrijving'];
        $soort_gerecht = $_POST['soort_gerecht'];
        $afbeelding = $_POST['afbeelding'];
      
        $sql = "INSERT INTO menu (naam,soort_gerecht,prijs,omschrijving,afbeelding) VALUES(:naam,:soort_gerecht,:prijs,:omschrijving,:afbeelding)";
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