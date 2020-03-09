<?php

var_dump($_GET);
$age = $_GET['age'];
$expPermis = $_GET['exp'];
$nbAccident = $_GET['acc'];
$anciennete = $_GET['anc'];

$coeff = -1;
$tarifs = ["Rouge", "Orange", "Vert", "Bleu"];
$reponse = "Vous paierez le tarif : ";

if ($age < 25 && $expPermis < 2) {
    $coeff = 0;
    } else if(($age < 25 && $expPermis >= 2) || ($age >= 25 && $expPermis < 2)) {
        $coeff = 1;
    } else {
        $coeff = 2;
    }

if($anciennete >= 5) {
    $coeff++;
}

$coeff -= $nbAccident; 

if($coeff >= 0) {
    $reponse .= $tarifs[$coeff];
} else {
    $reponse = "On ne veux pas de vous, merci, au revoir.";
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Premiers pas en PHP</title>
</head>
<body>
<h1>Bonjour</h1>
<p><?= $reponse ?></p>

</body>
</html> 
