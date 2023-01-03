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
  <a href="../contacter.php">CONTACTER</a>
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
require_once("fct.php");

$req="SELECT * from produit";
$resultat= execute_requete($req);

$contenu = '<center>';
$contenu .= '<div class="boutique-droite">';
while($produit=$resultat->fetch_assoc())
{
      $contenu .= '<div class="boutique-produit">';
		$contenu .= "<h3>$produit[nom]</h3>";
		//<a href= fiche_produit.php?id_produit=. $produit[id_produit]."><img src=?..........></a>
		$contenu .= "<a href=\"fiche_produit.php?idProduit=$produit[idProduit]\"><img src=".$produit["pho"]." width=\"130\" height=\"100\" /></a>";
		$contenu .= "<p>$produit[prix] €</p>";
		$contenu .= '<a href="fiche_produit?idProduit=' . $produit['idProduit'] . '">Voir la fiche</a>';
		$contenu .= '</div>';
     }



 $contenu .= '</div></center>';

//--------------------------------- AFFICHAGE HTML ---------------------------------//

echo $contenu;
