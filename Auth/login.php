<?php
  session_start();
  // test si donnee ont ete postées
  if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password'])){


    $pseudo =$_POST['pseudo'];
    $password =$_POST['password'];

    if($pseudo == "admin" && $password=='admin'){

      $_SESSION['islogged']=true;
      $_SESSION['user']['pseudo']='ADMIN';

      header('Location:../index.php');

    }else {

      echo "MOT DE PASSE INCORRECT ";
    }
  }






?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AUTHENTIFICATION</title>
  </head>
  <body>


      <div class="">

        <h3>PAGE D'AUTHENTIFICATION</h3>

        <form class="" action="" method="post">

          <table>
            <tr>
              <td>NOM D'UTILISATEUR</td>
              <td><input type="text" name="pseudo"  required></td>
            </tr>
            <tr>
              <td>MOT DE PASSE </td>
              <td><input type="password" name="password" required ></td>
            </tr>

            <tr>
              <td> <input type="submit" value="se connecter "> </td>
              <td> <input type="reset" value="nettoyer "> </td>
            </tr>
          </table>
        </form>

      </div>
  </body>
</html>
