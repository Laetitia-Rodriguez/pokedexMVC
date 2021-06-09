<?php 

// MainController, $pokemon
$pokemon = $viewVars['pokemon'];
$types = $viewVars['types'];
?>

<h2 class="main__title">Détails de <?= $pokemon['nom'] ?></h2>
<div class="detail">
    <img class="detail__image" src="<?= $baseUrl . '/img/' . $pokemon['numero'] . '.png' ?>" alt="">
    <div class="detail__description">
        <h3>#<?= $pokemon['numero'], ' ' . $pokemon['nom'] ?></h3>
        <div class="detail__description__types">
            <ul>
                <?php foreach ($types as $type) :?>
                    <li class="type" style="background:#<?= $type['color'] ?>"><?= $type['name'] ?></li>
                <?php endforeach ?>
            </ul>
        </div>
        <h4>Statistiques</h4>
        <div class="statistic">
            <div class="statistic__column1">PV</div>
            <div class="statistic__column2"><?= $pokemon['pv'] ?></div>
            <div class="statistic__column3">
                <div class="statistic__column3__value" style="width:<?= ($pokemon['pv'] * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="statistic">
            <div class="statistic__column1">Attaque</div>
            <div class="statistic__column2"><?= $pokemon['attaque'] ?></div>
            <div class="statistic__column3">
                <div class="statistic__column3__value" style="width:<?= ($pokemon['attaque'] * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="statistic">
            <div class="statistic__column1">Défense</div>
            <div class="statistic__column2"><?= $pokemon['defense'] ?></div>
            <div class="statistic__column3">
                <div class="statistic__column3__value" style="width:<?= ($pokemon['defense'] * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="statistic">
            <div class="statistic__column1">Attaque Spé.</div>
            <div class="statistic__column2"><?= $pokemon['attaque_spe'] ?></div>
            <div class="statistic__column3">
                <div class="statistic__column3__value" style="width:<?= ($pokemon['attaque_spe'] * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="statistic">
            <div class="statistic__column1">Défense Spé.</div>
            <div class="statistic__column2"><?= $pokemon['defense_spe'] ?></div>
            <div class="statistic__column3">
                <div class="statistic__column3__value" style="width:<?= ($pokemon['defense_spe'] * 100) / 255 ?>%"></div>
            </div>
        </div>
        <div class="statistic">
            <div class="statistic__column1">Vitesse</div>
            <div class="statistic__column2"><?= $pokemon['vitesse'] ?></div>
            <div class="statistic__column3">
                <div class="statistic__column3__value" style="width:<?= ($pokemon['vitesse'] * 100) / 255 ?>%"></div>
            </div>
        </div>
    </div>
</div>
<a>Revenir à la liste</a>

