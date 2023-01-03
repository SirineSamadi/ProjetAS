<?php 
error_reporting(0);
session_start();
 function execute_requete($req)
  { 
$servername = "localhost";
$username ="root";
$dbname ="coiff";
$password ="";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error)
   { 
    die ("connexion failed :".$conn-> connect_error);
   }

   //l'execution des requetes 
   //"SELECT * FROM produit"
  $resultat=$conn->query($req);//$req est le parametre 
 return $resultat;
  }

 //fonction pour le montant global 
function montant_global()

{
$total=0;
$count=count($_SESSION['coiff']['idProduit']);


for ($i=0; $i <$count ; $i++) { 
	$total+=(int)$_SESSION['coiff']['qte'][$i]*(int)$_SESSION['coiff']['prix'][$i];
}
return $total;


}

//fonction de creation de panier 
function creationPanier(){
   if (!isset($_SESSION['coiff'])){
      $_SESSION['coiff']=array();
      $_SESSION['coiff']['idProduit'] = array();
      $_SESSION['coiff']['nom'] = array();
      $_SESSION['coiff']['qte'] = array();
      $_SESSION['coiff']['prix'] = array();
      $_SESSION['coiff']['verrou'] = false;
   }
   return true;
}



//fonction d'ajout d'un article

function ajout($idproduit,$nom,$qte,$prix)
{
	$position=array_search($idproduit, $_SESSION['coiff']['idProduit']);
	if($position==false)
		{
			array_push($_SESSION['coiff']['idProduit'],$idproduit);
			array_push($_SESSION['coiff']['nom'],$nom);
			array_push($_SESSION['coiff']['qte'],$qte);
			array_push($_SESSION['coiff']['prix'],$prix);
		}

	else
		{
		 $_SESSION['coiff']['qte'][$position]+=$qte;

		}


}


function affiche_panier2()
{
    $count=count($_SESSION['coiff']['idProduit']);
    echo("<table border>");
    echo("<tr><td colspan=5> Panier d'achat</td></tr>");
    echo("<tr><td>Titre</td><td>Id Produit</td><td >Quantité</td><td >Prix unitaire</td><td >Action</td></tr>");

    for ($i=0; $i <$count ; $i++) { 
      echo "<tr><td>".$_SESSION['panier']['nom'][$i]."</td><td> ".$_SESSION['panier']['idProduit'][$i]."</td><td> ".$_SESSION['panier']['qte'][$i]." </td><td>".$_SESSION['panier']['prix'][$i]."$</td><td></td></tr>";
    }
   echo("<tr><td colspan=3> Total</td><td colspan=2> ".montant_global()."$ </td></tr>");
   echo("<tr><td colspan=5> <a href=traitement.php?case=traitement> <input type=button name=valider></a> </td></tr>");
   echo("<tr><td colspan=5> <a > Vider mon panier</a></td></tr>");
   echo("</table>");

}












function supprimerArticle($idproduit)
{
   //Si le panier existe
   creationPanier() ;
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['id_produits'] = array();
      $tmp['titre'] = array();
      $tmp['qte'] = array();
      $tmp['prix'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      
      for($i = 0; $i < count($_SESSION['panier']['idProduit']); $i++)
      {   
         if ($_SESSION['panier']['idProduit'][$i] !== $idproduit)
         {

            array_push( $tmp['idProduit'],$_SESSION['panier']['idProduit'][$i]);
            array_push( $tmp['nom'],$_SESSION['panier']['nom'][$i]);
            array_push( $tmp['qte'],$_SESSION['panier']['qte'][$i]);
            array_push( $tmp['prix'],$_SESSION['panier']['prix'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;

      //On efface notre panier temporaire
      unset($tmp);
   }
 
 
 ?>