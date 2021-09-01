<?php 

?>

    <nav class="header__nav navigation">
        <div class="close-menu-button"><i class="fas fa-times"></i></div>
        <ul class="header__nav--links">
            <?php foreach(getHeaderMenuItems() as $menuItem) : ?>
                <li>
                    <a class="link link-light-nav" href="<?= $menuItem->url; ?>"><?= $menuItem->title; ?></a>
                </li>
            <?php endforeach; ?>
            </ul>
    </nav>