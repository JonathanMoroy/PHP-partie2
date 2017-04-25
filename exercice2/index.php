<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie2exo1">Exercice 1</a></li>
                <li><a href="http://partie2exo3">Exercice 3</a></li>
                <li><a href="http://partie2exo4">Exercice 4</a></li>
                <li><a href="http://partie2exo5">Exercice 5</a></li>
                <li><a href="http://partie2exo6">Exercice 6</a></li>
                <li><a href="http://partie2exo7">Exercice 7</a></li>
                <li><a href="http://partie2exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Créer une variable IsEasy de type booléan et l'initialiser avec une valeur.
            Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
            Bonus : L'écrire de deux manières différentes.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            La variable "IsEasy" a pour valeur false:
            <?php
            // Déclaration de ma variable IsEasy
            $IsEasy = false;
            // Déclaration de ma condition vis à vis de ma variable IsEasy
            if ($IsEasy == true) {
                echo 'C\'est facile !!';
            }
            // Déclaration du reste des conditions en ternaire
            echo $IsEasy == false ? 'C\'est difficile !!' : 'C\'est facile !!';
            ?>
        </p>
    </body>
</html>