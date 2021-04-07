<?php
add_theme_support( 'menus' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
    register_nav_menu( 'top', 'Header Menu' );
}

@ini_set( 'upload_max_size' , '120M' );
@ini_set( 'post_max_size', '120M');
@ini_set( 'max_execution_time', '300' );
