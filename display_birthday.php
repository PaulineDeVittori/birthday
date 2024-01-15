<!DOCTYPE html>
<html>
<head>
    <title>Display birthday</title>
</head>

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
$query = "INSERT INTO `birthday-guests`(`Nom`,`Nombre`) VALUES ('Pauline',2)";
$connection->query($query);
$connection->query("INSERT INTO `birthday-guests`(`Nom`,`Nombre`) VALUES ('Clementine',2)");

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $Nom = $_POST['nom'];
    $Nombre = $_POST['nombre'];

    $sql = "INSERT INTO `birthday-guests` (Nom, Nombre) VALUE ('$nom','$nombre')";

    $connection->query($sql);
    $result = $connection->query($sql);
}

$connection->close();
?>