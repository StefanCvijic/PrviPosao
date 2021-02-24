<?php
// Ovde sam napravio niz koji ima key => value
$pages = array(
    'index.php' => 'Home',
    'news.php' => 'Novosti',
    'service.php' => 'Usluge',
    'about.php' => 'O nama',
    'contact.php' => 'Kontakt'
);
?>

<div class="menu">
    <ul class="nav">
    <!-- Prolazim kroz niz sa foreach petljom.
    $_GET['pg'] -> sa ovim uzimas podatke iz URL-a, i tu vidis na kojoj se strani korisnik trenutno nalazi.
    Kada prolazi kroz niz, uzimam (key) -> $pageId, I to uporedjujem sa $_GET['pg'].
    Ako je key jedna stranici iz URL-a, stavljam css klasu active-link na tu stanicu u meniju.
    Koristim sam ternary operator IF, variable = (condition) ? expressionTrue :  expressionFalse;
    https://www.codegrepper.com/code-examples/delphi/ternary+operator+w3schools -->
        <?php foreach ($pages as $pageId => $pageTitle) : ?>
            <li <?= (($_GET['pg'] == $pageId) ? 'class="active-link"' : '') ?>><a href="?pg=<?= $pageId ?>"><?= $pageTitle ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
