<?php
  require_once('dbconnexion.php');
 if(isset($_POST['submit'])){

            $email=$_POST['email'];
            $pwd=$_POST['pwd'];

            $stmt = $pdo->prepare("SELECT * FROM client where email=? AND mdp=?");
            $stmt->execute(array($email,$pwd));
            $row = $stmt->fetch();

            if($stmt->rowCount()>0){

              
                   
                    session_start();
                    $_SESSION['first_name']=$row['nom'];
                    $_SESSION['last_name']=$row['pnom'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['telephone']=$row['telephone'];
                    $_SESSION['id_user']=$row['idClient'];
                    $_SESSION['cart']=$row['numCard'];

                    header("location:monprofil.php");

                }
                
                    
  
                
               $msg="Email or Password is Wrong!";
            }?>
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
         <h1>Login</h1>
         <br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form method="POST" action="login.php">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Votre Email" type="text" name="email">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Votre mot de passe" type="password" name="pwd">
                            </div>
                        </div>
                        </div>

        <input type="submit" name="submit" value="Connexion"></input>
        </div>
                    </form>
                </div>
                
               
    </div>
  </div>

<br>
        <p>Vous n'avez pas un compte avec nous? <a href="inscription.php">Cliquez ici pour vous inscrire!</a></p><br/>

        <p> <a href="loginCoif.php">Si vous êtes un coiffeur, cliquez ici pour vous vous connecter!</a></p>
        <p> <a href="loginAdmin.php">Si vous êtes un Admin, cliquez ici pour vous vous connecter!</a></p>


        </center>

</body>
</html>


