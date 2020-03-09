<?php

//echo '<h1>Hello World</h1>';

$titre = 'Salut tout le monde!';
$coucou = 'Wnrfirofnerikfneroinriovnorie';
$image = "copains.jpg";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Premiers pas en PHP</title>
</head>
<body>

    <h1><?= $titre ?></h1>
    <p><?= $coucou ?></p>
    <p><img src="img/<?=$image ?>" alt=""></p>

</body>
</html> 
