<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie2exo1">Exercice 1</a></li>
                <li><a href="http://partie2exo2">Exercice 2</a></li>
                <li><a href="http://partie2exo4">Exercice 4</a></li>
                <li><a href="http://partie2exo5">Exercice 5</a></li>
                <li><a href="http://partie2exo6">Exercice 6</a></li>
                <li><a href="http://partie2exo7">Exercice 7</a></li>
                <li><a href="http://partie2exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>Créer deux variables age et genre. La variable genre peut prendre comme valeur :
            <br/>
            Homme
            Femme
            <br/>
            En fonction de l'âge et du genre afficher la phrase correspondante :
            <br/>
            Vous êtes un homme et vous êtes majeur
            <br/>
            Vous êtes un homme et vous êtes mineur
            <br/>
            Vous êtes une femme et vous êtes majeur
            <br/>
            Vous êtes une femme et vous êtes mineur
            <br/>
            Gérer tous les cas.</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            La variable "age" a pour valeur 26 et "genre" a pour valeur homme:
            <?php
            // Déclaration de mes variables
            $gender = 'homme';
            $age = 26;
            // Déclaration de mes conditions sur le genre
            if ($gender == 'femme') {
                echo 'Vous êtes une femme et ';
            } else {
                echo 'Vous êtes un homme et ';
            }
            // Déclaration de mes condistions sur l'âge
            if (is_nan($age) || $age < 0) {
                echo 'Votre âge est incorrect ou negatif, merci de corriger.';
            } else {
                if ($age < 18) {
                    echo 'vous êtes mineur.';
                } else {
                    echo 'vous êtes majeur.';
                }
            }
            ?>
        </p>
    </body>
</html>