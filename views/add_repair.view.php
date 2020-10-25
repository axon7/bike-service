<?php require('views/partials/nav.php') ?>

<h1>Sprzęt</h1>
<form method="POST" action="/bike-service/add-repair">
    <label>Marka roweru</label>
    <input name="brand" type="text"/>
    <label>Model roweru</label>
    <input name="model" type="text"/>
    <button type="submit">WYŚLIJ ZGŁOSZENIE</button>
</form>


<h1>Dostępne usługi</h1>
<?php foreach ($repairs as $repair) :?>
    <li>
        <label><?= $repair['name'] . ", cena: " . $repair['price'] . " zł"?></label>
        <input type="checkbox"/>
    </li>
<?php endforeach; ?>

<h1>Dane kontaktowe klienta</h1>
<label>Imię:</label>
    <input name="name" placeholder="Imię"/>

    <label>Nazwisko:</label>
    <input name="name" placeholder="Nazwisko"/>

    <label>Telefon</label>
    <input name="phone" placeholder="Nr telefonu"/>

    <label>Adres e-mail</label>
    <input name="email" placeholder="E-mail"/>
<BR>
<!--    <button type="submit">WYŚLIJ ZGŁOSZENIE</button>-->
<!--</form>-->

