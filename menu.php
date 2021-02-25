<?php
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
    <?php isset($_GET['pg']) ?  $pg = $_GET['pg'] : $pg = 'index.php' ?>
        <?php foreach ($pages as $pageId => $pageTitle) : ?>
            <li <?=(($pg == $pageId) ? 'class="active-link"' : '')  ?>><a href="?pg=<?= $pageId ?>"><?= $pageTitle ?></a></li>
        <?php endforeach; ?>

    </ul>
</div>
            