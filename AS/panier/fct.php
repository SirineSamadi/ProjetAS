<?php

function execute_requete($req)
{
    $servername = "localhost";
$username = "root";
$dbname = "coiff";
$password = "";
    
    $conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connexion failed".$conn->connect_error);
}

    $resultat = $conn->query($req);    
    return $resultat;
    
}
?>