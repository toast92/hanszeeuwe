<?php function wpb_custom_new_menu() {
  register_nav_menu('main-menu',__( 'main menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );?>