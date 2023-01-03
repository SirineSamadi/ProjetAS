<?php

include("fct.php");
 
$result = execute_requete("SELECT * FROM produit where idProduit=".$_GET["idProduit"]);

if($result){
    //fetch_assoc il revient un tableau assoc avec des clees les en-tete des champs 
    while ($produit=$result->fetch_assoc())
    {
      
      $contenu="";
      $contenu.="<h3> Nom: ".$produit["nom"]."</h3><hr>";
      //$contenu.="Categorie: ".$produit["categorie"]."<br>";
      
      $contenu.="<img src=".$produit["pho"]." width=130 height=100 ><br>";
      
      $contenu.="Prix: ".$produit["prix"]." $ <br>";
      $contenu.="Nombre de produit(s) disponible : ".$produit["qte"]."<br>";
      $contenu.="Quantite: <select name='produit'>";
      for($x=1;$x<= $produit['qte']; $x++){
        $contenu.="<option>".$x."</option>";
      }
        $contenu.="</select>";
        $contenu.="<button>Ajouter au panier</button><br>";
        $contenu.="Retour vers la selection de produit";
       echo $contenu;
        }
}

?>