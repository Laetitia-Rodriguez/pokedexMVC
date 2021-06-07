<?php

// MainController, $pokemons
$pokemons = $viewVars['pokemons'];
?>

<ul>
    <?php foreach ($pokemons as $pokemon) :?>
        <a href="<?= $baseUrl . '/detail/' . $pokemon['numero'] ?>">
            <li class="card">
                <img class="card__image" src="<?= "img/" . $pokemon['numero'] . '.png' ?>" alt="">
                <div>
                    <span>
                        #<?= $pokemon['numero'] ?>
                    </span>
                    <?= $pokemon['nom'] ?>
                </div>
            </li>
        </a>
    <?php endforeach ?>
</ul>
