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
<a href="../login.php">LOGIN</a>

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
error_reporting(0);
require_once("functions.php");

if(isset($_GET["idProduit"]))

{ $contenu = '';
    $req="SELECT * from produit WHERE idProduit=".$_GET["idProduit"];
   $resultat= execute_requete($req);
   $produit=$resultat->fetch_assoc();
   $contenu .= "<h3> Nom: ".$produit["nom"]."</h3><br>";

   $contenu .="<img src=".$produit["pho"]." width=130 height=100><br>";
   
   $contenu .="prix: ".$produit["prix"]." $<br>";
   $contenu .="Nombre de produits disponible : ".$produit["qte"]."<br>";
   //la partie formulaire
   $contenu .="<form name=panier action=fiche_produit.php method=POST>";
   $contenu .="Quantité : <select name=qte>";
   for($x=1;$x<= $produit['qte']; $x++){
    $contenu.="<option>".$x."</option>";
  }
   $contenu .="</select>";
   $contenu .="<input type=hidden name=produit value=".$produit["idProduit"].">";
   $contenu .="<input type=submit value=ajout_au_panier name=ajout>";
   $contenu .="</form>";
   //fin de la partie 
   $contenu .="<a href = index.php> Retour vers la sélection des tshirt</a><br>";


   echo $contenu;

}

if(isset($_POST["ajout"]))
{

$req="SELECT * from produit WHERE idProduit=".$_POST["produit"];

$resultat= execute_requete($req);
$produit=$resultat->fetch_assoc();

creationPanier();
ajout($produit["idProduit"],$produit["nom"],$_POST["qte"],$produit["prix"]);
//var_dump($_SESSION['panier']);
//session_destroy();

//Afficher le tableau
echo "<center><Table border=1><tr><td align='center' colspan=5 >Panier</td></tr>";
echo "<tr><td>Titre</td><td>Produit</td><td>Quantite</td><td>Prix Unitaire</td><td>Action</td></tr><tr align='center'>";
echo "<td>";
echo "<table >";
foreach($_SESSION['coiff']['nom'] as $value){
    echo "<tr><td>".$value."</td></tr>";
    }
echo "</table>";
echo "</td>";

echo "<td>";
echo "<table >";
foreach($_SESSION['coiff']['idProduit'] as $value){
        echo "<tr><td>".$value."</td></tr>";
        }echo "</table>";
        echo "</td>";

        echo "<td>";
        echo "<table >";
foreach($_SESSION['coiff']['qte'] as $value){
        echo "<tr><td>".$value."</td></tr>";
         }echo "</table ";
         echo "</td>";

         echo "<td>";
         echo "<table >";
foreach($_SESSION['coiff']['prix'] as $value){
            echo "<tr><td>".$value."</td></tr>";
            }echo "</table>";
            echo "</td>";
echo "</tr><tr align='center'><td colspan=3>Total</td><td colspan=2> ".montant_global()."  euros</td>";
echo "<tr><td align='center' colspan=5 ><a href=traitement.php?case=traitement><input height='100px' type=button value='Valider et declarer le paiment'/></a></td></tr>";
echo "<tr><td align='center' colspan=5 ><a href=traitement.php?case=supprimer>Vider mon panier</a></td></tr></table>";
}
?>

