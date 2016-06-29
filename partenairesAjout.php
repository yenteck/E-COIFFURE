<?php 

		
	var_dump($_POST);

	if(isset($_POST['nompart']) && !empty($_POST['nompart']) && isset($_FILES['logopart'])){

	require_once 'Inc/functions.php';

	$BDD=getDB();



    $nompart=$_POST['nompart'];
    $logopart='logo';




    /*if( $_FILES['logopart']['size'] <= 3000000){

        $infosfichier=pathinfo($_FILES['logopart']['name']);
        $extension_img=$infosfichier['extension'];
        $extension_accepte_img= array('jpg','png','jpeg' );

        if(in_array($extension_img , $extension_accepte_img)){

            $errors=false;
        }else{

            echo " Verifier votre type de fichier  ";
        }
    }else{
    	echo "verifier la taille du fichier ";
    	exit();
    } */



    $nbr=$req=$BDD->exec("INSERT INTO partenaire (nompartenaire,logos) VALUES ('$nompart' ,'$logopart')");

    if($nbr==1)
    	header("Location:partenaires.php");
    else echo "ERREUR D'AJOUT";



    


  }



?>