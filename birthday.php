<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UFT-8">
    <title>Birthday</title>
    <link rel = "stylesheet" href  = "birthday.css">
</head>

<body>
        <h1>Birthday</h1>
    
        <h1>De Vittori Pauline</h1>
        <header>
            <h4>La fete se deroulera le 27 novembre a 19h</h4>
            <h3>"theme fleurs"</h3>
        </header>
    
        <div id = lieu>
            <P>Le lieu de la fete sera indique a cette adresse : 
                <a href = "https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/le-descriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/">
                    Salle du jardin des plantes</a>
            </P>
        </div>

        <div id = formulaire>
            <form method = "post" action = "register.php">
                <div id = nom>
                    <p>Votre nom :</br>
                        <input type = "nom" id = "nom" name = "nom" placeholder = "Entrer le nom"> 
                    </p>
                </div>

                <div id = nombre>
                    <p>Combien de personnes vous accompagnent ?</br>
                        <input type = "nombre" id = "nombre" name = "nombre" placeholder = "Entrer le nombre">
                    </p>
                </div>

                <div id = boutonsubmit>
                    <button type = "submit" id = submit>Submit</button>    
                </div>
            </form>
        </div>


        <footer>
            <button id = ensavoirplus onclick = "displayExplanations()">En savoir plus</button>
            <p id = infos>Le theme de la fete est les fleurs, chacun peut venir avec des vetements</br>
            aux motifs fleuris ou bien simplement avec une fleur à la main ou en broche sur une veste</br>
            n'heistez pas a apporter un bouquet fleuri a ajouter a la decoration de la salle
        </p>
        </footer>
    
        <script src="birthday.js"></script>

    <?php include "display_birthday.php";?>
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