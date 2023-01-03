<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="menu.css" rel="stylesheet"  type="text/css"/>

<style>




    #img1{
        width:10px;
        height:10px;
    }
    

    

    div{
      background-size: cover;
    }

    #div1 {
      border: 0px beige;
      height:130px;
      width:100%;
      text-align: center;
    }


    
</style>

</head>

<body>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 






<div class="topnav" id="myTopnav">

  
<a href="../index.html">ACCUEIL</a>
  <a href="../salon.php">NOTRE SALON</a>
<a href="../services.php">SERVICES</a>
<a href="../produits.php">PRODUITS</a>
<a href="../login.php">LOGIN</a>
<a href="../update.php">UPDATE</a>
<a href="../jojo.py">JOJO</a>
<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
    <script>

        function myFunction() {

            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>
	</body>
</html>
<?php
require_once("functions.php");
 


if(isset($_GET["case"]))
{

 

        //insertion d'une ligne dans la table commande

    

    //commande(id:int auto_increment,date_commande:varchar (20),etat:varchar(10),prix:float(10) )
        

    

    $req="INSERT INTO commande(date_commande,etat,prix) VALUES ('".date('m.d.y')."','en cours',".montant_global().")";
    $res=execute_requete($req);
    //recuperation de l'id de la derniere commande

    

    $req2 = "SELECT MAX(idcommande) AS max_idcommande FROM commande";
    $result = execute_requete($req2);
    $data = $result->fetch_assoc();
    $idcommande = $data['max_idcommande'];

    

    //affichage de la facture 

    

    $c=count($_SESSION['coiff']['idProduit']);
    echo("<h3>details de la commande</h3></br>");
    echo("Commande Numero:.. ".$idcommande."</br>");
    echo("Nombre d'articles command�s:".$c."</br>");
    echo("<h3>Liste des articles:</h3></br>");

    

    for ($i=0; $i <$c ; $i++) {
        echo(" Article ".$i.": ".$_SESSION['coiff']['nom'][$i]."</br>");
    }
    echo("<br>");
    echo("<br>");
    echo("<br>");
    md5("toto");
    echo("Montant du panier: ".montant_global()."</br>");
    echo("Frais de livraison: ...");
    $m=montant_global();
    $taxes=$m*0.35;
    $total=$m+$taxes;

    

    echo("Taxes:".$taxes." </br>");
    echo("Montant total � payer:.... </br>");
    echo ("<h3>".$total. "$</h3></br>");

    

    require_once("PayPal_button.php");

    

 

}
?>