<?php
//add styling
function themeslug_enqueue_style(){
    wp_enqueue_style( 'examplethree', get_template_directory_uri() . '/style.css', false );
}
add_action('wp_enqueue_scripts','themeslug_enqueue_style');
//add javascript
function add_javascript(){
    wp_register_script('custom_javascript',get_template_directory_uri() . './js/dynamicfront.js','jquery',1,true);
    wp_enqueue_script('custom_javascript');
}
add_action('wp_enqueue_scripts','add_javascript');
//set thumbnail image size
//set_post_thumbnail_size( 50, 50 ); // 50 pixels wide by 50 pixels tall, resize mode
function wpdocs_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 );
}
add_action( 'after_setup_theme', 'wpdocs_setup_theme' );
//add post-thumbnails / images
//add_theme_support('post-thumbnails',array('post'));

//Register/Add menu
if( !function_exists('register_main_nav')){
    function register_main_nav(){
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain')
        ));
    }
    add_action('init','register_main_nav');
}
// set the amount of words in excerpt
add_filter('excerpt_length',function($length){return 20;});

?>