<?php

$image = "copains.jpg";

$formulaire = [
    ['nom' => 'Dupont', 'prenom' => 'Jean', 'email'=> 'jdupont@gmail'],
    ['nom' => 'Dupuis', 'prenom' => 'Loïc', 'email'=> 'loic45000@gmail'],
    ['nom' => 'Armand', 'prenom' => 'Edgard', 'email'=> 'armand-e@gmail'],
    ['nom' => 'Durand', 'prenom' => 'Emilie', 'email'=> 'emiliedurand@gmail'],
    ['nom' => 'Martin', 'prenom' => 'Justine', 'email'=> 'juju289@gmail'],
];

var_dump($_GET);

$new =  ['nom' => $_GET['nom'], 'prenom' => $_GET['prenom'], 'email'=> $_GET['email']];
var_dump($new);
array_push($formulaire, $new);

//1.Afficher tous les noms.//
$nbElem = sizeof($formulaire);//Je récupère la taille de tableau

$liste = "";
for($i = 0; $i < $nbElem; $i++) {
    $liste .="<li>".$formulaire[$i]['nom']."</li>";
   
}

var_dump($liste);

//2.Afficher tous les noms des utilisateurs sur le document HTML
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Premiers pas en PHP</title>
</head>
<body>
<h1>Bonjour</h1>
<p>Voici la liste des utilisateurs:</p>
<ul>
   <?= $liste ?>
</ul>
<hr>
<p><img src="img/<?=$image ?>" alt=""></p>
</body>
</html> 
