<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 8</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie2exo1">Exercice 1</a></li>
                <li><a href="http://partie2exo2">Exercice 2</a></li>
                <li><a href="http://partie2exo3">Exercice 3</a></li>
                <li><a href="http://partie2exo4">Exercice 4</a></li>
                <li><a href="http://partie2exo5">Exercice 5</a></li>
                <li><a href="http://partie2exo6">Exercice 6</a></li>
                <li><a href="http://partie2exo7">Exercice 7</a></li>
            </ul>
        </nav>
        <p>Traduire ce code avec des if et des else :<br/>
            echo ($maVariable) ? 'c'est ok !!' : 'c'est pas bon !!!';
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            La variable "maVariable" a pour valeur true:<br/>
            <?php
            // Déclaration de ma variable
            $maVariable = true;
            // Déclaration de mes conditions en if else et non en ternaire
            if ($maVariable) {
                echo 'c\'est ok !!';
            } else {
                echo 'c\'est pas bon !!!';
            }
            ?>
        </p>
    </body>
</html>