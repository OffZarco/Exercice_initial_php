<?php
// Exercice 0

// $var = '5';
// echo $var;


// Exercice 1

// $word = "c'est";
// $word2 = "vie.";
// $word3 = "Simplon";
// $word4 = "la";

// echo "$word3 $word $word4 $word2";


// Exercice 2

// $variable1= 12;
// $variable2= 4;

// echo($variable1 / $variable2);


// Exercice 3 

// $var="clement";
// $var1= "extrapolation";

// echo strlen($var) + strlen($var1);


// Exercice 4

// $maitrise_du_code = 1000;
// $text = "je maitrise tellement le cod maintenant";
// $text2 = "mouai bof enfait";

// if ($maitrise_du_code >= strlen($text)) {
//     echo $text;
// } else {
//     echo $text2;
// }


// Exerice 5

// $chiffre_fetiche_sandrine = 7;
// $chiffre_fetiche_xavier = 130;
// $chiffre_fetiche_andre = 8;
// $temp;

// $temp = $chiffre_fetiche_sandrine;
// $chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
// $chiffre_fetiche_xavier = $temp;

// echo $chiffre_fetiche_sandrine;
// echo $chiffre_fetiche_xavier;

// Exercice 6

$vent = 20;
$houle = 20;
$cadence_vague = 7;

if ($vent > 30 && $houle <= 20 && $cadence_vague >= 10) {
    echo "tu peux aller surfer";
} else if ($vent < 30 && $houle <= 30 && $cadence_vague <= 8) {
    echo "tu peux surfer mais sois prudent"; 
} else {
    echo "tu rentre chez toi";
}














Correction :
// // Exercice 0

// $var = '5';
// echo $var;

// // Exercice 1

// $word = "c'est ";
// $word2 = "vie.";
// $word3 = "Simplon";
// $word4 = "la";

// echo $word3 . $word . $word4 . $word2;

// // Exercice 2

// $variable1= 12;
// $variable2= 4;

// echo $variable1 / $variable2

// // Exercice 3

// $var="clement";
// $var1= "extrapolation";

// echo strlen($var1 . $var)

// Exercice 4 

// $maitrise_du_code = 1000;
// $text = "je maitrise tellement le code maintenant";
// $text2 = "mouai bof enfait";

// if ($maitrise_du_code >= strlen($text)) {
//     echo $text;
// } else {
//     echo $text2;
// }

// Exercice 5

// $chiffre_fetiche_sandrine = 7;
// $chiffre_fetiche_xavier = 130;
// $chiffre_fetiche_andre = 8;

// $swap = $chiffre_fetiche_sandrine;
// $chiffre_fetiche_sandrine = $chiffre_fetiche_xavier;
// $chiffre_fetiche_xavier = $swap;

// // echo "sandrine : $chiffre_fetiche_sandrine\n";
// // echo "xavier : $chiffre_fetiche_xavier\n";

// $chiffre_fetiche_sandrine -= ($chiffre_fetiche_xavier . $chiffre_fetiche_andre);

// if ($chiffre_fetiche_sandrine > 50) {
//     echo $chiffre_fetiche_sandrine;
// }

// Exercice 6

// $compte = -100;

// if ($compte > 0) {
//     echo "bravo, vous êtes un bon gestionnaire";
// } else {
//     echo "Vous faites vraiment n'importe quoi avec votre argent";
// }

// Exercice 7

// $vent = 20;
// $houle = 20;
// $cadence_vague = 7;

// if ($vent > 30 && $houle <= 20 && $cadence_vague >= 10) {
//     echo "tu peux aller surfer";
// } else if ($vent < 30 && $houle <= 30 && $cadence_vague <= 8) {
//     echo "tu peux surfer mais sois prudent"; 
// } else {
//     echo "tu rentre chez toi";
// }

// Exercice 8

$nombre_1 = 88;
$nombre_2 = 7;
$nombre_3 = 23;
$nombre_4 = 5;
$nombre_5 = 45;
$nombre_6 = 12;

function isMultiple($nbr1, $nbr2) {
    if ($nbr1 % $nbr2 == 0) {
        return $nbr1 * -1;
    } else {
        return $nbr1;
    }
}

$result = isMultiple($nombre_1, 2) + isMultiple($nombre_2, 2) + isMultiple($nombre_3, 2) + isMultiple($nombre_4, 2) + isMultiple($nombre_5, 2) + isMultiple($nombre_6, 2);
echo $result
?>
