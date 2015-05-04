<?php
    session_start();
      if(!isset($_SESSION['username'])){
        header("location: login.php ");
    }
    echo "<br><a href= 'content1.php'>Content2</a>";
?>