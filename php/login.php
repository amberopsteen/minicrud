<?php

include ('../includes/connect.php');

  if(isset($_POST['submit'])) {

    $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = 'admin'";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); 

   if ($result[0]['gebruikersnaam'] == $_POST['gebruikersnaam'] AND $result[0]['wachtwoord'] == $_POST['wachtwoord']) {
    session_start();

    $_SESSION['admin'] = true;

    header('location: ../admin.php');
    exit();
   } 
    
  else {
    header('location: ../index.php');
    exit();
  }
}
?>
