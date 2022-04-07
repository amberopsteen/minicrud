<?php
      require_once('../includes/connect.php');

      if(isset{$_POST['button']}) {
        $todo = $_POST['todo'];
        $gedaan = 0;

        $sql = "INSERT INTO todos (todo, gedaan) VALUES (:todo,:gedaan)";
        $stmt = $connect->prepare($sql);
        $stmt->bindparam(':todo', $_POST['todo']);
        $stmt->bindparam(':gedaan', $_POST['gedaan']);
        $stmt->execute();
      }
    ?>