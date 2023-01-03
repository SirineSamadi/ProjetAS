
<?php
 require_once('dbconnexion.php');
         session_start();
         
          if(isset($_POST['submit'])){
            
            $fname=$_POST['nom'];
            $lname=$_POST['pnom'];
            $pwd=$_POST['pwd'];
            $email=$_POST['email'];
            $dateNaissance=$_POST['date'];
            $telephone=$_POST['telephone'];
            $idd = $_SESSION['id_user'];

        
                
                
  
                     $stmt=$pdo->prepare("UPDATE coiffeur SET nom=?,prenom=?,mdp=?,email=?,dateNaissance=?,telephone=?
                     WHERE idCoiffeur = ?;");
                     $stmt->execute([$fname, $lname,$pwd,$email,$dateNaissance,$telephone,$_SESSION['id_user']]);
                     echo" Your Informations have been updated Successfully";
                     header('Location:./updateCoif.php');
        
                    
                     
                 /*catch(PDOException $e){
                    $_SESSION['msg_n']= $e->getMessage();
                    header('Location:./update.php');
                    
                 }*/
                
                 
         
                 
             
             
         
             
         }

         ?>
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
         <h1>Update de vos informations!</h1>
         <br><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form method="POST" action="updateCoif.php">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Votre Nom" type="text"  name="nom">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Votre Prénom" type="text"  name="pnom">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Votre date de naissance (AAAA-MM-JJ)" type="date"  name="date">
                            </div>
                          
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Votre mot de passe" type="text"  name="pwd">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Votre numero de téléphone"  name="telephone">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <input class="form-control" placeholder="Confirmez votre mot de passe" type="conf">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                            <input class="form-control" placeholder="Votre adresse" type="text"  name="email">
                            </div>
                            <div class="text-center">
                            <input type="submit" name="submit" value="submit"/>
                                </div>
                        </div>
                    </form>
                </div>
                
               
    </div>
  </div>
</div>





        </center>

</body>
</html>
