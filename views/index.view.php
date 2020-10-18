<h1>Dostępne usługi</h1>
<p>tutaj będzie lista obecnych moich napraw</p>
<p>----------</p>
<p>a jesli nie jestem zalogowany to pokaze sie link do rejestracji lub logowania</p>

<a href="register">Rejestracja</a>
<a href="login">Logowanie</a>
<?php foreach ($repairs as $repair) :?>
    <li>
       <?= $repair['name'] . ", cena: " . $repair['price'] . " zł"?>
    </li>
    <?php endforeach; ?>