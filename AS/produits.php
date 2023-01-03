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
    border: 0px  beige;
    height:70px;
    width:100%;
    text-align: center;
  }


  #tr1{
      height: 500px;
      width:75%;
  }
  

  #td1{
      height: 500px;
      width:37.5%;
  }

  table{
      
      height: 500px;
      width:75%;
  }

  img{
    border-radius: 25px;
      width: 95%;
      display:block;
  }

  #animate{
      position: relative;
      animation: anime 5s infinite;
      animation-timing-function: ease-in-out;
  }

  @keyframes anime {
      from {left: 0px;}
      to {left: 300px;}
    }


    #td2{
      width:33%;
      height: 75%;
    }

    #td3{
      width:33%;
      height: 25%;
    }

    #tr2{
      height: 75%;
      width:500px;
  }

  #tr3{
    height: 25%;
    width:500px;
    text-align: center;
}
   </style>
</head>

<body>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<div class="topnav" id="myTopnav">
<a href="index.html">ACCUEIL</a>
<a href="salon.php">NOTRE SALON</a>
<a href="services.php">SERVICES</a>
<a href="produits.php">PRODUITS</a>
<a href="login.php">LOGIN</a>
<a href="jojo.py">JOJO</a>
  <a href="contacter.php">CONTACTER</a>
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
    <center>
         <div>
          <br>
              <div >
            <h1>Nos produits </h1>

              </div>
              <table>
              <tr>
                    <td>
                      
                           <img src="imgs/products1.jpg" />
    
                    </td>
                    <td >
                       <div >
                      <h2>Ce que nous offrons </h2><br>
                    </div>
                     <p>CHEZ A&S, nous avons de nombreux produits capillaires qui sont 100% naturels. Nos produits sont mondialement connus et appréciés par de nombreux médecins et spécialistes. Et ce qui est le mieux, c'est que nous les vendons à un prix bon et raisonnable! </p>
                            </div>
                      
                   </td>
                   </tr>
              </table>
              
              <div id="carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
              

              
<?php
require_once("fct.php");

session_start();

$req="SELECT * from produit";
$resultat= execute_requete($req);

$contenu = '<table>';

while($pro=$resultat->fetch_assoc())
{
        $contenu .= '<tr>';
        $contenu .= '<td>';
        $contenu .= '<div>';
		    $contenu .= "<b><h2> Nom : $pro[nom]</h3></b>";
		    $contenu .= '</div>';
        $contenu .= "<h3> Prix : $pro[prix] $ </h3>";
        
        $contenu .= "<h4> Quatite du produit : $pro[qte] </h4>";
		    $contenu .= '</td>';
        $contenu .= '<td>';
        $contenu .= "<img src=".$pro["pho"]." width=\"100\" height=\"400\" />";
		
		    $contenu .= '</td></tr><br/>';
     }



 $contenu .= '</table></div>';

echo $contenu;
?>  


        </body>
    </head>

</html>