<?php

var_dump($_GET);

$nb1 = $_GET['nb1'];
$nb2 = $_GET['nb2'];
$nb3 = $_GET['nb3'];

if($nb1 < $nb2) && ($nb2 < $nb3) {
    $ordre = "croissant";
} else if($nb1 > $nb2) && ($nb2 > $nb3){
    $ordre = "décroissant";
} else {
    $ordre = "particulier";
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
<p>L'ordre sera <?= $ordre ?> </p>

</body>
</html> 