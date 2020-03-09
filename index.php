<?php

var_dump($_GET);

$heure = $_GET['heure'];
$minutes = $_GET['minutes'];
$minutes = ($minutes + 1)% 60;

if($minutes != 0) {
    $heure = ($heure + 1) % 24;
} else {
    $heure = ($heure + 2)% 24;
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
<p> <?= $heure ?>h <?= $minutes ?>minutes</p>

</body>
</html> 
