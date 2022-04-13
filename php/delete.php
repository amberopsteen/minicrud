<?php

include ('../includes/connect.php');

if(isset($_POST['verwijderen'])){ 
    $id = $_POST['id'];

    $sql = "DELETE FROM menu WHERE ID = :id";
    $stmt = $connect->prepare($sql);
    $stmt->bindparam(':id', $id);
    $stmt->execute();
    
    header('location:../admin.php'); 
    exit(); 
    } ?>
