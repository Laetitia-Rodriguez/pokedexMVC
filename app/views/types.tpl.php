<?php 

$types = $viewVars['types'];
?>

<p>Cliquez sur un type pour voir tous les Pokémon de ce type</p>
<div class="types">
    <ul>
        <?php foreach($types as $type) : ?>
            <a href="<?= $baseUrl . '/type/' . $type['id']  ?>">
                <li style="background:#<?= $type['color'] ?>">
                    <?= $type['name'] ?>
                </li>
            </a> 
        <?php endforeach ?>
    </ul>
</div>