<?php
function register_my_menu() {
register_nav_menu('header-menu',__( 'Header_Menu' ));
}
add_action( 'init', 'register_my_menu' );
function register_my_menu_2(){
	register_nav_menu('footer-menu',__( 'Footer_Menu' ));
}
add_action( 'init', 'register_my_menu_2' );
add_theme_support( 'post-thumbnails' );

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
register_sidebar( array(
'name' => __( 'Main Sidebar', 'theme-slug' ),
'id' => 'sidebar-1',
'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );
register_sidebar( array(
'name' => __( 'Second Sidebar', 'theme-slug' ),
'id' => 'sidebar-2',
'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );
}
?>