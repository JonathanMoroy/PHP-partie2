<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 6</title>
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
                <li><a href="http://partie2exo7">Exercice 7</a></li>
                <li><a href="http://partie2exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Traduire ce code avec des if et des else :<br/>
            echo ($monAge >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
        </p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            La variable "monAge" a pour valeur 26:<br/>
            <?php
            // Déclaration de ma variable
            $monAge = 26;
            // Déclaration de mes conditions en if else et non en ternaire
            if ($monAge >= 18) {
                echo 'tu es majeur.';
            } else {
                echo 'Tu n\'es pas majeur.';
            }
            ?>
        </p>
    </body>
</html>