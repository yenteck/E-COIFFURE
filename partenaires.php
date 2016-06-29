<?php
  session_start();

  require_once 'Inc/functions.php';

  if(!checkLogged()) header('Location:Auth/login.php');


  $BDD= getDB();


  // liste des partenaires ici 


  $ROWS=$BDD->query("SELECT * FROM partenaire");

  $listePart= $ROWS->fetchAll();

  $ROWS->closeCursor();

  

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HOME.CUT</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="#">Accueil</a></li>
              <li class="active"><a href="#">Partenaires</a></li>
              <li><a href="#">Modeles / tarif</a></li>
              <li><a href="#">Tendances </a></li>
              <li><a href="#">Clients</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

              <li><a href="Auth/logout.php" class="">SE DECONNECTER </a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>



    </div> <!-- /container -->



   <div class="container">
      
      <div class="row">

        <div class="col-lg-10 col-lg-offset-1">
          
            <div class="panel panel-default">
              
              <div class="panel-heading">
                  AJOUTER PARTENAIRE
              </div>

              <div class="panel-body">

                <form action="partenairesAjout.php" method="post" enctype="multipart/form-data">
                
                  <table class="padded">
                    
                    <tr>
                      <td>NOM DU PARTENAIRE</td>
                      <td><input type="text" name="nompart" class="form-control"></td>
                    </tr>
                    <tr>
                      <td>LOGO (selectionner une image) </td>
                      <td> <input type="file" name="logopart" class="form-control"> </td>
                    </tr>

                    <tr>
                      <td><input type="submit" value="AJOUTER" class="btn btn-primary"></td>
                      <td><input type="reset" value="RENITIALISER" class="btn btn-danger"></td>
                    </tr>
                  </table>

                </form>
              </div>
            </div>



            <div class="panel panel-default">
              
              <div class="panel-heading">
                  LISTE DE PARTENAIRES
              </div>

              <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>NOM PARTENAIRE</th>
                        <th>LOGO</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                        foreach ($listePart as $KEY=>$part) {
                          
                          ?>
                            <tr>
                              <td><?= ($KEY + 1) ?></td>
                              <td><?= $part['nompartenaire'] ?></td>
                              <td><?= $part['logos'] ?></td>
                              <td><span class="label label-danger">supprimer</span></td>
                            </tr>

                          <?php
                        }

                      ?>
                    </tbody>
                  </table>
              </div>
            </div>
        </div>
      </div>
     
   </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
