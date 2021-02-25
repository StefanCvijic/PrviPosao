<?php $page=basename($_SERVER['PHP_SELF']);?>
<div class="menu">
        <ul>
            <li class="<?php if($page == 'index.php'):echo 'active-link';endif; ?>"><a href="index.php">Home</a></li>
            <li class="<?php if($page == 'news.php'):echo 'active-link';endif; ?>"><a href="news.php">Novosti</a></li>
            <li class="<?php if($page == 'service.php'):echo 'active-link';endif; ?>"><a href="service.php">Usluge</a></li>
            <li class="<?php if($page == 'about.php'):echo 'active-link';endif; ?>"><a href="about.php">O nama</a></li>
            <li class="<?php if($page == 'contact.php'):echo 'active-link';endif; ?>"><a href="contact.php">Kontakt</a></li>
        </ul>
    </div>