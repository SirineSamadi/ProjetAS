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

    
    img{
      width:300px;
        height:300px;
        
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

  
  <a href="index.html">ACCUEIL</a>
  <a href="salon.php">NOTRE SALON</a>
<a href="services.php">SERVICES</a>
<a href="produits.php">PRODUITS</a>
<a href="login.php">LOGIN</a>
<a href="rdvCoif.php">Rendez-vous</a>
<a href="updateCoif.php">UPDATE</a>
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
            <h1> Mon profil </h1>

                          </div>

                          <table>
                <tr id="tr1">
                    <td id="td1">
                            <img src="imgs/person.jpg">
    
                    </td>
                    <td id="td1">
                        <div id="animate">
                    </div>

                    <?php

                    session_start();

                      if (isset($_SESSION['first_name'])) {
                        echo "Nom " . $_SESSION['first_name'] . "/n";
                        echo "Prenom " . $_SESSION['last_name'] . "/n";
                        echo "Email " . $_SESSION['email'] . "/n";
                        echo "Telephone " . $_SESSION['telephone'] ."/n" ;

                  
                             } 
                      else {

                        echo "Bonjour, vous n'avez pas défini de nom de session.";
                      }
                        
                        
                        
                        ?>  
                      
                      
                    <button onclick="window.location.href = 'updateCoif.php';">Update</button>
                    <button onclick="window.location.href = 'rdvCoif.php';">Rendez-vous</button>
                            </div>
                      
                    </td>
                </tr>
            </table>

            <?php
             
          ?>
        </div>
        </center>

</body>
</html>


