<?php 

session_start();
if(isset($_GET['action'])){
  if($_GET['action']=='clearall'){
      unset($_SESSION['cart']);
  }
  if($_GET['action']=='remove'){
      foreach($_SESSION['cart'] as $key =>$value){
          if($value['id']==$_GET['id']){
            
             unset($_SESSION['cart'][$key]);
          }
      }
  }
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
<?php


   
    echo "<h3 class='display-3 text-center font-weight-normal my-5'>Panier</h2>";
     
     if(!isset($_SESSION['cart'])){
     
        echo "<h3 class='text-center id=table_panier'> Votre panier est vide.Continuez vos achats et trouvez un produit!</h3>";
        
     }else{
        $total=0.0;
        $output="";
        $output .="
        <section id='table_panier'>
        <div class='container'>
        <div class='row'>
        <div class='col-md-8 mx-auto '>
        <table class='table table-bordered table-striped '>
        <tr>
      
        <th>Image</th>
        <th>Title</th>
        <th>Autor</th>

        <th>Price</th>
        <th>Action</th>
        </tr>
        </div>
        </div>
        ";
        echo $output;
       foreach($_SESSION['cart'] as $key => $value){
          //  while($value['id_user']==$_SESSION['id_user']){
                $output="
            <tr>
             
              <td><img src='../img/".$value['image']."' width='100px' height='100px'/></td>
              <td>".$value['titre']."</td>
              <td>".$value['auteur']."</td>
              <td>$".$value['prix']."</td>
              <td>
              <a href='panier.php?action=remove&id=".$value['id']."'>
              <button class='btn btn-danger btn-block'>Remove</button>
              </a>
              </td>
              "; 
              $total=$total+$value['prix']; 
              echo $output;
          
              
             
            
        }
      
        
        $output="
        <tr>
        <td colspan='1'></td>
        <td><b>Total Price</b></td>
        <td id='total'>$".number_format($total,2)."</td>
        <td>
        <a href='panier.php?action=clearall'>
        <button class='btn btn-warning btn-block'>Clear</button>
        </a>
        </td>
        <td  colspan='3' id='paypal-button-container'></td>
        </tr>
        </table>
        </section>

        ";
        echo $output;
       // echo var_dump($_SESSION['cart']);
       
  
            
        
    
   
}

    

   // require_once('paypal_button.php');

        
   ?>
   
   <script src="https://www.paypal.com/sdk/js?client-id=AVfS-C2dtRFOFmivHMBGU4uU73ALyiPvTELIt2jUSp1C8PZLvB5TWowsTuvTp94hhcWHC_QrK4uTSc2y&enable-funding=venmo&currency=CAD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'blue',
          layout: 'vertical',
          label: 'pay',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"CAD","value":<?php echo $total; ?> }}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
             
            

           window.location.replace('success.php');
            
          });
        },

        onCancel: function(err) {
            window.location.replace('oncancel.php');
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>
    <script
                src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js" integrity="sha512-Y2IiVZeaBwXG1wSV7f13plqlmFOx8MdjuHyYFVoYzhyRr3nH/NMDjTBSswijzADdNzMyWNetbLMfOpIPl6Cv9g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>