<?php

function julieEggenEnqueueStyles() {
    wp_enqueue_style('main', JULIE_EGGEN_ASSETS_DIST_URI . '/main.css');
}

function julieEggenEnqueueScripts() {
    wp_enqueue_script('main', JULIE_EGGEN_ASSETS_DIST_URI . '/main.js');
}

add_action('wp_enqueue_scripts', 'julieEggenEnqueueStyles');
add_action('wp_enqueue_scripts', 'julieEggenEnqueueScripts');