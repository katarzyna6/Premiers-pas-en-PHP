<?php

var_dump($_GET);
$indice = isset($_GET['numero'])? $_GET['numero'] : 0 ;

$images = ["img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg", "img/5.jpg"];

$size = sizeof($images);
$menu = "";
for($i = 0; $i < $size; $i ++) {
    $menu .="<li><a href='index.php?numero=$i'> Image n° ".($i + 1)."</a></li>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Premiers pas_PHP</title>
</head>
<body>
<h1>Bonjour</h1>
<p><?= $menu ?></p>

<div><img src="<?= $images[$indice] ?>" alt=""/></div>

</body>
</html> 