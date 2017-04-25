<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie2exo2">Exercice 2</a></li>
                <li><a href="http://partie2exo3">Exercice 3</a></li>
                <li><a href="http://partie2exo4">Exercice 4</a></li>
                <li><a href="http://partie2exo5">Exercice 5</a></li>
                <li><a href="http://partie2exo6">Exercice 6</a></li>
                <li><a href="http://partie2exo7">Exercice 7</a></li>
                <li><a href="http://partie2exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Créer une variable age et l'initialiser avec une valeur.
            Si l'age est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            La variable "age" a pour valeur 26:
            <?php
            // Déclaration de ma variable age
            $age = 26;
            // Déclaration de ma condition vis à vis de ma variable age
            if ($age < 18) {
                echo 'Vous êtes mineur.';
            } else {
                echo 'Vous êtes majeur';
            }
            ?>
        </p>
    </body>
</html>