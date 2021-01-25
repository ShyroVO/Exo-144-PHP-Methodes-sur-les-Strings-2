<?php

// 1
$text = "Aujourd'hui il fait -1000°C.";
$text = addslashes($text);

echo "<br><br>";

//2
$text2 = "text";
echo $text2;
echo "<br>";

$text22 = ucfirst($text2);
echo $text22;
echo "<br>";

$text222 = "TEXT";
$text222 = lcfirst($text222);
echo "<br>";

// 3
$text3 = "1 2 3 4 5 6 7 8 9 10 11 12 13 14 115 16 17 18 19 20 21 22 23 24 25";
echo strlen($text3);
echo "<br><br>";

// 4
$text4 = "Text de mon choix";
/* Transformez cette chaine de caractères à l'aide de la bonne fonction
Utilisez une boucle pour afficher chaque mot ( entrée du tableau )
du retour de la fonction sur une ligne pour chaque mot ( 1 ligne par mot ) */

// 5
$tableau5 = ["Cheval", "Chien", "Chat"];
$tableau55 = implode($tableau5);
echo $tableau55;
echo "<br><br>";

// 6
$text6 = "Le texte de votre choix.";
$text66 = strrev($text6);
echo $text66;
echo "<br><br>";

// 7
$hello = "Hello, nous apprenons PHP";
echo $hello;
echo "<br>";
$hello = strip_tags($hello);
echo $hello;
echo "<br><br>";

//8
$text8 = "Le texte de votre choix.";
if (strlen($text8) < 500){
    echo "pas 500";
}
//Faites en sorte qu'à gauche du texte, le caractère | s'affiche tant que la chaine ne fait pas 500 de longueur.
echo "<br><br>";

// 9
$text9 = "Text de votre choix";
$tableau9 = str_split($text9);
foreach ($tableau9 as $item){
    echo "$item <br>";
}
echo "<br><br>";

// 10
$text10 = "Text de votre choix";
$text10 = str_replace("choix", "rien", $text10);
echo $text10;
echo "<br><br>";

// 11
$text11 = "Text de votre test";
$search = "test";
$position = stripos($text11, $search);
if ($position !== false){
    echo "Bien trouver";
}
echo "<br><br>";

// 12
$text12 = "test de text et non de texte";
$search = strpos($text12, "test", 0);
if ($search !== false){
    echo "Bien au debut";
}

// 13
$text13 = "test de text et non de texte";
$search = strpos($text13, "texte", strlen($text13));
if ($search !== false){
    echo "Bien a la fin";
}

?>