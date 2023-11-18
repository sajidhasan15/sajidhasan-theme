<?php

// Variable

// Include
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));

// Hooks
add_action('wp_enqueue_scripts', 'sajid_enqueue');
add_action('wp_head', 'sajid_head', 5);