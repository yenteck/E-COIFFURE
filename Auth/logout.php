<?php
  session_start();
  
  unset($_SESSION['islogged']);
  unset($_SESSION['user']);
  header("Location:login.php");
?>
