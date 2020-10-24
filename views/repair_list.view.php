<?php require('views/partials/nav.php') ?>



<p>tutaj będzie lista obecnych moich napraw</p>
<p>----------</p>
<p>a jesli nie jestem zalogowany to pokaze sie link do rejestracji lub logowania</p>

<a href="register">Rejestracja</a>
<a href="login">Logowanie</a>
<form method="POST" action="/bike-service/names">
    <input name="name"/>
    <button type="submit">SEND</button>
</form>
