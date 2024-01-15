<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UFT-8">
    <title>Super heros</title>
    <link rel = "stylesheet" href  = "birthday.css">
</head>

<body>
    <h1>Super hero</h1>
        <div>
            <form method = "post" action = "add_birthday.php">
                <h4>Nom : </h4>
                <input id = "nom" name = "nom" placeholder = "Entrer le nom">               
                <h4>Nombre : </h4>
                <input id = "nombre" name = "nombre" placeholder = "Entrer le nombre">
                <input type = "submit" name = "submit" value = "Send">
            </form>
        </div>
    <?php include "display-birthday.php";?>
</body>

</html>
<?php
$selectDataQuery = "SELECT id, name FROM users";
$result = $connection->query($selectDataQuery);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "ID:" .$row["id"] . " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}

?>