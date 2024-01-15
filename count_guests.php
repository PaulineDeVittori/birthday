<?php
$host = "e-srv-lamp.univ-lemans.fr";
$user = "e2303255";
$database = "e2303255";
$password = "Mhn692nt";
$connection = new mysqli($host,$user,$password,$database);
if($connection->connect_error){
    echo("error");
}
else{
    echo("no error");
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $Nom = $_POST['nom'];
    $Nombre = $_POST['nombre'];

    $sql = "INSERT INTO `birthday-guests` (Nom, Nombre) VALUE ('$nom','$nombre')";

    $connection->query($sql);
    $result = $connection->query($sql);
}

$connection->close();
?>