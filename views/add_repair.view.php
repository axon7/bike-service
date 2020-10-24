<?php require('views/partials/nav.php') ?>

    <h1>Dostępne usługi</h1>
<?php foreach ($repairs as $repair) :?>
    <li>
        <?= $repair['name'] . ", cena: " . $repair['price'] . " zł"?>
    </li>
<?php endforeach; ?>