<?php
function register_my_menu() {
    register_nav_menu('main-menu',__( 'Menu chính' ));
}
add_action( 'init', 'register_my_menu' );
add_filter('use_block_editor_for_post', '__return_false');