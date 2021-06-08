<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pokedex</title>
        <link rel="stylesheet" type="text/css" href="<?= $baseUrl ?>/css/styles.css" >
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
        
    </head>

    <body>
        <header id="header">
            <h2>Pokédex</h2>
            <nav>
                <a href="<?= $baseUrl . '/liste' ?>" class="container__nav">Liste</a>
                <a href="<?= $baseUrl . '/types' ?>" class="container__nav">Types</a>
            </nav>
        </header>
        <main id="main">