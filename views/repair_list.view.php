<?php require('views/partials/nav.php') ?>

<?php foreach ($names as $name) :?>
    <li>
        <label><?= $name['brand'] . "  " . $name['model']?></label>
        <input type="checkbox"/>
    </li>
<?php endforeach; ?>

<p>domyslna strona, tutaj będzie lista obecnych moich napraw</p>
<p>----------</p>
<p>a jesli nie jestem zalogowany to pokaze sie link do rejestracji lub logowania</p>

<a href="register">Rejestracja</a>
<a href="login">Logowanie</a>

