<?php

// MainController, $pokemons
$pokemons = $viewVars['pokemons'];
?>

<ul>
    <?php foreach ($pokemons as $pokemon) :?>
        <li class="card">
            <img class="card__image" src="<?= "img/" . $pokemon['numero'] . '.png' ?>" alt="">
            <div>
                <span>
                    #<?= $pokemon['numero'] ?>
                </span>
                <?= $pokemon['nom'] ?>
            </div>
        </li>
    <?php endforeach ?>
</ul>
