<?php

include ('../includes/connect.php');

if(isset($_POST['verwijderen'])){ 
    $sql = "DELETE FROM menu WHERE ID = :ID";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_POST['ID']); 
    $stmt->execute();

    
    
    header('location:../admin.php'); 
    exit(); 
    } ?>
