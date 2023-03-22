<?php

require_once __DIR__ . '/models/MovieClass.php';
require_once __DIR__ . '/data/db.php';

$movies_object = [];

foreach ($movies as $movie) {
    $movies_object[] = new Movie(
        $movie['title'],
        $movie['genre'],
        $movie['year'],
        $movie['director']
    );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primo Esercizio OOP</title>
</head>

<body>
    <?php foreach ($movies_object as $movie) : ?>
        <h2><?= $movie->title ?></h2>
        <h2><?= $movie->genre ?></h2>
        <h2><?= $movie->year ?></h2>
        <h2><?= $movie->director ?></h2>
    <?php endforeach ?>
</body>

</html>