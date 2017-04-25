<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie2exo1">Exercice 1</a></li>
                <li><a href="http://partie2exo2">Exercice 2</a></li>
                <li><a href="http://partie2exo3">Exercice 3</a></li>
                <li><a href="http://partie2exo4">Exercice 4</a></li>
                <li><a href="http://partie2exo6">Exercice 6</a></li>
                <li><a href="http://partie2exo7">Exercice 7</a></li>
                <li><a href="http://partie2exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Traduire ce code avec des if et des else :<br/>
            echo ($maVariable != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            La variable "maVariable" a pour valeur "Homme":<br/>
            <?php
            // Déclaration de ma variable
            $maVariable = 'Homme';
            // Déclaration de mes conditions en if else et non en ternaire
            if ($maVariable != 'Homme') {
                echo 'C\'est une développeuse !!!';
            } else {
                echo 'C\'est un développeur !!!';
            }
            ?>
        </p>
    </body>
</html>