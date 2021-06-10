<?php

// MainController, $viewVars
$pokemons = $viewVars['pokemons'];
?>

<div class="list_byTypes">
    <ul>
        <?php foreach ($pokemons as $pokemon) :?>
            <a class="link" href="<?= $baseUrl . '/detail/' . $pokemon['numero'] ?>">
                <li class="card">
                    <img class="card__image" src="<?= $baseUrl . '/img/' . $pokemon['numero'] . '.png' ?>" alt="">
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

</div>