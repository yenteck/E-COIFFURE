
<?php

  function checkLogged(){
    if($_SESSION['islogged'] && !empty($_SESSION['user']['pseudo']))
      return true;
    else return false;
  }


  function getDB(){

    try {

      $bdd= new PDO('mysql:host=localhost;dbname=homecut','yenteck','beboila');

    } catch (Exception $e) {
      die("ERREUR ".$e->getMessage());
    }
    return $bdd;

  }
