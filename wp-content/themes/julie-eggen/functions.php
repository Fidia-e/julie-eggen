<?php

// ajout de la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

define('JULIE_EGGEN_ASSETS_DIST_URI', get_template_directory_uri() . '/assets/dist');

require __DIR__ . '/inc/scripts.php';
require __DIR__ . '/inc/menus.php';