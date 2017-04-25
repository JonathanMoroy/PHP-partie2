<!DOCTYPE html>
<html>
    <head>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>
    <body>
        <nav>
            <h2>Liens des exercices</h2>
            <ul>
                <li><a href="http://partie2exo1">Exercice 1</a></li>
                <li><a href="http://partie2exo2">Exercice 2</a></li>
                <li><a href="http://partie2exo3">Exercice 3</a></li>
                <li><a href="http://partie2exo5">Exercice 5</a></li>
                <li><a href="http://partie2exo6">Exercice 6</a></li>
                <li><a href="http://partie2exo7">Exercice 7</a></li>
                <li><a href="http://partie2exo8">Exercice 8</a></li>
            </ul>
        </nav>
        <p>L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
            Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
            <img src="tableau-richter.jpg" alt="Tableau détaillant les magnitudes de l'échelle de Richter"/><br/>
            Gérer tous les cas.
            Utilser autre chose que des if else</p> 
        <!-- Ouverture des balises PHP dans une balise p -->
        <p>
            La variable "richter" a pour valeur 9:<br/>
            <?php
            // Déclaration de ma variable richter
            $richter = 9;
            // Déclaration de mes conditions concernant l'échelle de richter
            switch ($richter) {
                case 1:
                    echo '1: Micro-séisme impossible à ressentir.';
                    break;
                case 2:
                    echo '2: Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                    break;
                case 3:
                    echo '3: Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                    break;
                case 4:
                    echo '4: Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                    break;
                case 5:
                    echo '5: Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                    break;
                case 6:
                    echo '6: Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                    break;
                case 7:
                    echo '7: Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                    break;
                case 8:
                    echo '8: Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                    break;
                case 9:
                    echo '9: Séisme capable de tout détruire sur une très vaste zone.';
                    break;
                default: echo 'Aucun mouvement des plaques';
                    break;
            }
            ?>
        </p>
    </body>
</html>