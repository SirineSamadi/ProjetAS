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
      border: 0px beige;
      height:130px;
      width:100%;
      text-align: center;
    }


    img{
      width:75%;
      height:75%;
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
        



        <div class="Contact-bg ">
  <div class="container ">
    <div class="row ">
       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
        <div class="abouttitle ">
        <br>
         <h1>Prendre Rendez-vous</h1>
         <br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form  method="post"  action="rdvCoif.php">
                        <div class="row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <input class="form-control" placeholder="email du client" name="email" type="email">

                            
                         </div>
 
                      
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="La date désirée" name="dateRdv" type="datee">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <input class="form-control" placeholder="L'heure désirée" name="heureRdv" type="heure">
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                        <input  type="submit"  name="envoyer"  value="Envoyer"  />
        </div>

        </center>

                    </form>
                </div>

    </div>
  </div>
</div>


</body>
</html>

<?php
$servername="localhost";
$db="coiff";
$user="root";
$pass="";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$db", $user, $pass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed: ". $e -> getMessage();
}


if(isset($_POST['dateRdv']) && isset($_POST['heureRdv'])&& isset($_POST['email'])){
    session_start();
    // Récupération des valeurs du formulaire
    $dateRdv = $_POST['dateRdv'];
    $heureRdv = $_POST['heureRdv'];}

    //TEST TEST 
    if(isset($_SESSION['id_user'])){
    $idCoiffeur = $_SESSION['id_user'];

    $email = $_POST['email'];
    
    
    $stmt = $conn->prepare("SELECT * FROM client WHERE email=? ");
    $stmt->execute([$email]); 
    
    $data = $stmt->fetchAll();
    foreach ($data as $row) {
        $idClient = $row['idClient'];


        // Préparation de la requête d'insertion
        $stmt = $conn->prepare("insert into rendezvous (dateRdv, heureRdv, idClient, idCoiffeur) values (:dateRdv, :heureRdv, :idClient, :idCoiffeur)");

        // Liaison des variables à la requête préparée


        $stm->bindParam(':dateRdv', $dateRdv);
        $stm->bindParam(':heureRdv', $heureRdv);
        $stm->bindParam(':idClient', $idClient);
        $stm->bindParam(':idCoiffeur', $idCoiffeur);
        if(isset($idClient)){
            $stm->bindParam(':idClient', $idClient);
        }
        else{
            $stm->bindValue(':idClient', null, PDO::PARAM_NULL);
        }
        if(isset($idCoiffeur)){
            $stm->bindParam(':idCoiffeur', $idCoiffeur);
        }
        else{
            $stm->bindValue(':idCoiffeur', null, PDO::PARAM_NULL);
        }

        // Exécution de la requête
        $stm->execute() or die(print_r($ins->errorInfo(), true));

        // Vérification du nombre de lignes insérées
        if($stm->rowCount() > 0){
            // Si au moins une ligne a été insérée, affichage d'un message de réussite
            echo "Le rendez-vous a été ajouté avec succès.";
        }
        else{
            // Si aucune ligne n'a été insérée, affichage d'un message d'erreur
            echo "Erreur lors de l'ajout du rendez-vous.";
        }




                
            }


        }

    



?> 