<?php 

$types = $viewVars['types'];
?>

<p>Cliquez sur un type pour voir tous les Pokémon de ce type</p>
<div class="types">
    <ul>
        <?php foreach($types as $type) : ?>
            <li style="background:#<?= $type['color'] ?>">
                <a href="<?= $baseUrl . '/type/' . $type['id']  ?>"><?= $type['name'] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>