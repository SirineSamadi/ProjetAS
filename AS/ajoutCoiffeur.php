

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
         <h1>Un nouveau coiffeur</h1>
         <br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form method="POST" action="ajoutCoiffeur.php">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Nom" type="text"  name="nom">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Prénom" type="text"  name="pnom">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Date de naissance (AAAA-MM-JJ)" type="date"  name="date">
                            </div>
                          
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Mot de passe" type="text"  name="pwd">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Numero de téléphone"  name="telephone">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Confirmez le mot de passe" type="conf">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <input class="form-control" placeholder="Email" type="text"  name="email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <input class="form-control" placeholder="Adresse" type="text"  name="adresse">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <textarea id="longtext" name="about"></textarea>
                            </div>
                            
                        </div>
                        
        <div class="text-center">
        <button type="submit" class="btn btn-primary btn-block  font-weight-bold" name="submit">Submit</button>
        </div>
                    </form>
                </div>
                
               
    </div>
  </div>
</div>





        </center>

</body>
</html>

<?php
  require_once('dbconnexion.php');
  if (isset($_POST['submit'])){
    $fname=$_POST['nom'];
    $lname=$_POST['pnom'];
    $telephone=$_POST['telephone'];
    $dateNaissance=$_POST['date'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $adresse=$_POST['adresse'];
    $about=$_POST['about'];

    $stmt = $pdo->prepare("INSERT INTO coiffeur (nom,prenom,adresse,mdp,email,dateNaissance,telephone,about) VALUES (?,?,?,?,?,?,?,?)");
    $result=$stmt->execute([$fname, $lname,$adresse,$pwd, $email, $dateNaissance,$telephone,$about]);
   
    
}

  
?>


<!-- 
// require 'dbconnexion.php';

// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=coiff', 'root', '');
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//     echo 'Connected Successfully!';
// } catch (PDOException $e) {
//     exit('Error Connecting To DataBase');
//     echo 'Error found!';
    
// }



// class Users{
 
//     private $servername = '127.0.0.1';
//     private $username = "root";
//     private  $password = "";
//     private $database = "coiff"; 
//     public $con;
//     // Database connection
//     public function __construct(){
//       $this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
//       if(mysqli_connect_error()){
//         trigger_error('Failed to connect to MySQL: '.mysqli_connect_error);
//       }else{
//         echo 'Connected Successfully!';
//         return $this->con;
//       }
//     }
//     }



// class Client {
//   public $nom;
//   public $prenom;
//   public $dateNaissance;
//   public $motDePasse;
//   public $email;
//   public $tel;
//   public $naissance;

//   public function __construct($nom, $prenom, $dateN, $motDePasse ,$email,$tel,$dateNaissance) {
//     $this->nom = $nom;
//     $this->prenom = $prenom;
//     $this->dateNaissance = $dateNaissance;
//     $this->motDePasse = $motDePasse;
//     $this->email = $email;
//     $this->tel = $tel;
//     $this->naissance = $naissance;
//   }
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   // Récupération des données du formulaire
//   $nom = $_POST['nom'];
//   $prenom = $_POST['pnom'];
//   $dateNaissance = $_POST['date'];
//   $motDePasse = $_POST['mdp'];
//   $email = $_POST['email'];
//   $tel = $_POST['tel'];
//   echo'Insert good';

//   // Création d'un nouveau client à partir des données du formulaire
//   $client = new Client($nom, $prenom, $email, $motDePasse,$dateNaissance,$tel);

//   // Connexion à la base de données
// $dsn = 'mysql:host=localhost;dbname=coiff';
// $utilisateur = 'root';
// $motDePasse = 'm';

// try {
//     $pdo = new PDO($dsn, $utilisateur, $motDePasse);
// } catch (PDOException $e) {
//     // Gestion de l'exception
//     echo 'Connexion échouée : ' . $e->getMessage();
//     exit;
// }

// Préparation de la requête
// $stmt = $pdo->prepare('INSERT INTO client (nom, prenom,telephone,dateNaissance, email, mdp) VALUES (:nom, :prenom, :tel, :dateNaissance , :email , :motDePasse )');

// // Liaison des valeurs
// $stmt->bindValue(':nom', $client->nom);
// $stmt->bindValue(':prenom', $client->prenom);
// $stmt->bindValue(':tel', $client->tel);
// $stmt->bindValue(':dateNaissance', $client->dateNaissance);
// $stmt->bindValue(':email', $client->email);
// $stmt->bindValue(':motDePasse', $client->motDePasse);

// // Exécution de la requête
// $stmt->execute();

// // Récupération de l'ID généré par la base de données
// $id = $pdo->lastInsertId();

// }


?> -->

// <!-- <form method="post">
//   <label for="nom">Nom :</label><br>
//   <input type="text" id="nom" name="nom"><br>
//   <label for="prenom">Prénom :</label><br>
//   <input type="text" id="prenom" name="prenom"><br>
//   <label for="email">Email :</label><br>
//   <input type="email" id="email" name="email"><br>
//   <label for="motDePasse">Mot de passe :</label><br>
//   <input type="password" id="motDePasse" name="motDePasse"><br><br>
//   <input type="submit" value="S'inscrire">
// </form>  -->

