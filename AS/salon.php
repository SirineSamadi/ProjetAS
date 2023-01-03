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
    
    #id{
        height: 300px;
        width:250px;
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
     
  p{
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
        <div><br>
              <div id="div1">
            <h1>Notre salon</h1>
                          </div>
          <table>
            <tr id="tr1">
                <td id="td1">
                        
                <img src="imgs/salon9.jpg"> 

                </td>
                <td id="td1">
                    <div id="animate">
                    <h2>A propos de nous </h2><br>
                </div>
                        <p>A&S est un salon de coiffure situé dans la rue hochelaga, à Montréal. 
                        Il a été ouvert en 2016 par Sirine Samadi et la future docteur Aya El Barri. 
                        Notre salon a été classé comme le meilleur salon dans le monde entier par de nombreux critiques célèbres !
                         C'est très crédible puisque nous offrons de nombreux services pour vous avec des prix raisonnables. Tout ce que vous avez à faire est de pointer un rendez-vous avec l'un de nos coiffeurs bien-aimés et vous pouvez garantir que vous aurez le meilleur glow up. Mais ce n'est pas tout, les amis ! en AS nous vendons des produits capillaires, ainsi que des produits de soins de la peau !
                            les achats peuvent être effectués en ligne ou au magasin. Vous êtes donc les bienvenus dans notre salon !</p>
                        </div>
                  
                </td>
            </tr>
        </table>

    
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="1000">
                <img class="d-block w-75" id='img2' src="imgs/salon10.jpg" alt="First slide">
              </div>
              <div class="carousel-item" data-bs-interval="1000">
                <img class="d-block w-75" id='img2' src="imgs/salon8.jpg" alt="Second slide">
              </div>
              <div class="carousel-item" data-bs-interval="1000">
                <img class="d-block w-75" id='img2' src="imgs/salon2.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <table>
              <tr id="tr1">
                        <td id="td1">
                            <div id="animate">
                            <h2>Notre équipe </h2><br>
                        </div>
                                <p>Chez A&S, nous avons des coiffeurs très compétents qui ont de longues années d'expérience et de savoir-faire. Dans notre salon de coiffure, nous chérissons chaque employé et nous nous considérons comme une grande équipe qui travaille ensemble pour faire de ce salon le meilleur de la planète pour toujours ! Nous nous assurons bien sûr de satisfaire chaque client et de faire en sorte qu'il quitte notre salon avec une belle coiffure et un grand sourire sur le visage !
                                </p>                     
                        </td>
                        <td id="td1">                           
                                <img src="imgs/people.jpg">
                                               
                        </td>
                        
                    </tr>
                </table>
                <!-- <table>
                  <tr id="tr2">
                    <td id="td2">
                    <img src="imgs/sirine.jpg">
                    </td>
                    <td id="td2">
                    <img src="imgs/aya.jpg">
                    </td><td id="td2">
                    <img src="imgs/jotaro.jpg">
                    </td>
                
                  </tr>

                  <tr id="tr3">
                    <td id="td3">
                      <div>
                      <h2>Sirine Samadi</h2>
                    </div>
                    <div><h4>Co-propriétaire</h4></div>
                    <p>En 2016, j'ai cofondé ce salon de beauté/coiffure avec l'une de mes plus proches amies Aya El Barri. J'adore ce salon et tous les employés, ils travaillent également dans le salon avec passion dans le but de satisfaire tous leurs clients.</p>
                    </td>

                    <td id="td3">
                      <div>
                        <h2>Aya El Barri</h2>
                      </div>
                      <div><h4>Co-propriétaire</h4></div>
                      <p>Aux côtés de mon amie Sirine Samadi, nous avons ouvert ce merveilleux salon de coiffure en 2016. La gestion de ce magnifique salon parallèlement aux études pour devenir médecin sont vraiment une passion pour moi. Je suis fière de tous les employés qui font de ce salon un grand et s'assurent de satisfaire tous nos clients !</p>                      
                                </td>

                    <td id="td3">
                      <div>
                        <h2>Jotaro Kujo</h2>
                      </div>
                      <div><h4>Barbier</h4></div>
                      <p>
                        Je suis heureux de travailler chez A&S, être barbier a toujours été une passion pour moi depuis que je suis jeune, et A&S m'a accueilli à bras ouverts. J'ai 7 ans d'expérience en tant que barbier ainsi que coiffeur.                                 </td>
                  </tr>
                </table>

                <table>
                  <tr id="tr2">
                    <td id="td2">
                      <img src="imgs/jolyne.jpg">
                    </td>

                    <td id="td2">
                      <img src="imgs/robin.jpg">
                    </td>

                    <td id="td2">
                      <img src="imgs/chopper.jpg">
                    </td>
                  </tr>

                  <tr id="tr3">
                    <td id="td3">
                      <div>
                      <h2>Jolyne Cujoh</h2>
                    </div>
                    <div><h4>Coiffeuse</h4></div>
                    <p>
                      Bonjour à tous ! Je m'appelle Jolyne et je suis coiffeuse, je travaille à A&S depuis 2018. J'adore ce salon et tous les employés et les clients. J'ai 5 ans d'expérience en coiffure ainsi qu'en coloration de cheveux. Je serais heureuse de vous avoir comme client !                    </td>

                    <td id="td3">
                      <div>
                      <h2>Nico Robin</h2>
                    </div>
                    <div><h4>Coiffeuse</h4></div>
                    <p>
                      Je m'appelle Robin et je suis coiffeuse, je travaille à A&S depuis 2017. C'est un honneur de travailler dans ce salon. J'ai 6 ans d'expérience dans la coiffure et la coloration des cheveux. Je serais heureux de vous avoir comme client ! Tout ce que vous avez à faire est de prendre un rendez-vous et nous sommes prêts à partir !                    </td>

                    <td id="td3">
                      <div>
                      <h2>Tony Tony Chopper</h2>
                    </div>
                    <div><h4>Esthéticien</h4></div>
                    <p>
                      Je m'appelle Tony et je suis esthéticien à A&S. Je fais des manucures, des soins et des massages du visage. Je travaille dans ce merveilleux salon depuis son ouverture. J'adore mon travail d'esthéticienne et les employés le rendent tellement meilleur.                    </td>
                  </tr>
                </table>
    -->
      

</center>
</body>
</html>


<?php
    $servername="localhost";
    $db="coiff";
    $user="root";
    $pass="";
    
    try{
        $conn = new PDO("mysql:host=$servername;dbname=coiff", $user, $pass);
        $conn -> setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Connection failed: ". $e -> getMessage();
    }
    // $idService = $_GET['idService'];
    // $_SESSION["id"] = $idService;
    $stmt = $conn->prepare("SELECT * FROM coiffeur ");
    $stmt->execute(); 
    
    $data = $stmt->fetchAll();
    // and somewhere later:
    foreach ($data as $row) {
      echo"<table><tr><td>";
      echo"<img id=\"id\" src=".$row['photo']." width=\"250\" height=\"250\" /></td><br />";
      echo"<td><br/>";
      echo"<b><h5>Nom Complet : ". $row['nom']. $row['prenom']."<br /></h5>";
      
      echo"<b><h5> Email : ". $row['email']." <br /></h5>";
      echo"<b><h5> Telephone :  ". $row['telephone']." <br /></h5>";
      echo"<b><h5> ". $row['about']."  <br /></p>";

      echo"</td></tr></table>";
      
      


   
}

?>
 

