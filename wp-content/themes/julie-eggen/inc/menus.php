<?php

/**
 * On génère 2 emplacements de menu au hook init
 */
function julieEggenRegisterMenus() {
    register_nav_menus([
        'header-menu' => __( 'Header Menu' ),    
        'mobile-menu' => __( 'Mobile Menu' ),
        'footer-menu' => __( 'Footer Menu' ),        
    ]);
}

function getHeaderMenuItems() {
    // on récupère les emplacements de menu et les id de menus associés
    // get_nav_menu_locations renvoie un array qui contient des couples 'identifiant-emplacement-menu' => id-du-menu-associé-dans-le-BO
    $menuLocations = get_nav_menu_locations();
    $headerMenuId = $menuLocations['header-menu']; 

    return wp_get_nav_menu_items($headerMenuId);
}


add_action( 'init', 'julieEggenRegisterMenus' );