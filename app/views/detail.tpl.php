<?php 

// MainController, $pokemons
$pokemon = $viewVars['pokemon'];
?>

<h2>Détails de <?= $pokemon['nom'] ?></h2>
<div class="detail">
    <img class="detail__image" src="<?= 'img/' . $pokemon['numero'] . '.png' ?>" alt="">
    <div>
        <h3>#<?= $pokemon['numero'], $pokemon['nom'] ?></h3>
        <h4>>Statistiques</h4>
        <ul class="statistic">
            <li>PV <?= $pokemon['pv'] ?></li>
            <li>Attaque <?= $pokemon['attaque'] ?></li>
            <li>Défense <?= $pokemon['defense'] ?></li>
            <li>Attaque Spé. <?= $pokemon['attaque_spe'] ?></li>
            <li>Défense Spé. <?= $pokemon['defense_spe'] ?></li>
            <li>Vitesse <?= $pokemon['vitesse'] ?></li>
        </ul>
    </div>
</div>
<a>Revenir à la liste</a>
