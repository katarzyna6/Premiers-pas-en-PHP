<?php

var_dump($_GET);

$nb1 = $_GET['nb1'];
$nb2 = $_GET['nb2'];

if(($nb1 < 0 && $nb2 < 0) || ($nb1 > 0 && $nb2 > 0)) {
    $result = "positif";
} else{
    $result = "négatif";
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
<p>Le résultat sera <?= $result ?> </p>

</body>
</html> 
