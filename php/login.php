<?php
  if(isset($_POST['submit'])) {

    session_start();

    $_SESSION['admin'] = true;

    header('location: ../admin.php');
    exit();
  } else {
    header('location: ../index.php');
    exit();
  }
?>