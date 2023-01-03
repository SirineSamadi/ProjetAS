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
              <div id="div1">
            <h1>Nos services </h1>

              </div>

              <table>
                <tr id="tr1">
                    <td id="td1">
                            <img src="imgs/style.jpg">
    
                    </td>
                    <td id="td1">
                        <div id="animate">
                        <h2>Ce que nous offrons </h2><br>
                    </div>
                    <p>Chez A&S, nous proposons de nombreux services, qu'il s'agisse de coiffure, de coloration, de manucure, etc. Consultez les services disponibles ci-dessous, avec leurs prix et les coiffeurs qui en sont responsables : </p>

                            </div>
                      
                    </td>
                </tr>
            </table>
            </div>

            <!-- <div id="carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000"> -->
                  
                

                

                
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
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
    $stmt = $conn->prepare("SELECT * FROM service ");
    $stmt->execute(); 
    
    $data = $stmt->fetchAll();
    // and somewhere later:
    foreach ($data as $row) {
      echo"<b><p>". $row['description']."<br /></p>";
      echo"<b><p> ". $row['prix']." $ <br /></p>";

   
}

?>