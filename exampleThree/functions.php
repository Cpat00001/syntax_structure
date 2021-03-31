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

    wp_register_script('registration_script_ajax', get_template_directory_uri() . './js/ajax-registration.js',array('jquery'),null,false);
    wp_enqueue_script('registration_script_ajax');
    //in order to use ajax in front 
    wp_localize_script( 'registration_script_ajax', 'frontend_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action('wp_enqueue_scripts','add_javascript');
//set thumbnail image size
//set_post_thumbnail_size( 50, 50 ); // 50 pixels wide by 50 pixels tall, resize mode
function wpdocs_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150 );
}
add_action( 'after_setup_theme', 'wpdocs_setup_theme' );
//set thumbnail size
add_action('after_setup_theme','change_images_sizes');
  function change_images_sizes(){
    add_image_size('custom-post-image-size','290','180',true);
    add_image_size('secret_post','290','180',true);
    add_image_size('singlepost_img','500','500');
  } 

//add post-thumbnails / images
//add_theme_support('post-thumbnails',array('post'));

//Register/Add menu
if( !function_exists('register_main_nav')){
    function register_main_nav(){
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'secondary_menu' => __('Secondary Menu', 'text_domain')
        ));
    }
    add_action('init','register_main_nav');
}
// set the amount of words in excerpt
// add_filter('excerpt_length',function($length){return 20;});

//custom function to set amount of characters in excerpt of post
function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 60);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
    return $excerpt;
    }
//include file wiht ajax call
// include_once('openhours.php');
include_once('page-openhours.php');

//registration form
add_shortcode('reg_form','registration_form');
// function registration_form(){
//  WERSJA Z ONCLIK NA SUBMIT BUTTON
function registration_form(){
    $reg_form .= "<form action=''>";
    $reg_form .= "<div class='cent'>";
    $reg_form .= "<h3>Registration form: </h3>";
    $reg_form .= "<label for='username'>Username</label><br>";
    $reg_form .= "<input type='text' name='username' id='username'><br><br>";
    $reg_form .= "<label for='username'>Password</label><br>";
    $reg_form .= "<input type='text' name='pass' id='pass'><br><br>";
    $reg_form .= "<label for='email'>Email</label><br>";
    $reg_form .= "<input type='text' name='email' id='email'><br><br>";
    $reg_form .= "<?php wp_nonce_field('name_of_my_action','name_of_nonce_field', true,true); ?>";
    $reg_form .= "<input type='Submit' value='Register' id='register_event'>";
    $reg_form .= "<div class='spinner'>Please wait,procesing your request...</div>";
    $reg_form .= "<div class='msg1'></div>";
    $reg_form .= "</div>";
    $reg_form .="</form>";
    return $reg_form;
}
// add PHP file processing AJAX call from Registration form
include 'registrationData.php';
// include file with Login_Form => login_form.php
//include 'page-login.php';

//@@@@@@@ if Login failure redirect to custom Login Page np Wordpress wp-login @@@@@@@@@@@@@@@@@
/**
 * Function Name: front_end_login_fail.
 * Description: This redirects the failed login to the custom login page instead of default login page with a modified url
**/
add_action( 'wp_login_failed', 'front_end_login_fail' );
function front_end_login_fail( $username ) {

// Getting URL of the login page
$referrer = $_SERVER['HTTP_REFERER'];    
// if there's a valid referrer, and it's not the default log-in screen
if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) {
    wp_redirect( get_permalink( 51 ) . "?login=failed" ); 
    exit;
 }
}

/**
 * Function Name: check_username_password.
 * Description: This redirects to the custom login page if user name or password is   empty with a modified url
**/
add_action( 'authenticate', 'check_username_password', 1, 3);
function check_username_password( $login, $username, $password ) {

// Getting URL of the login page
$referrer = $_SERVER['HTTP_REFERER'];

// if there's a valid referrer, and it's not the default log-in screen
if( !empty( $referrer ) && !strstr( $referrer,'wp-login' ) && !strstr( $referrer,'wp-admin' ) ) { 
    if( $username == "" || $password == "" ){
        wp_redirect( get_permalink( 51 ) . "?login=empty" );
        exit;
    }
  }
}
// @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
//if user NOT loggined then Redirect to Login Page => do_action('check_login') on protected URL
add_action('check_login','redirect_to_login_page');

function redirect_to_login_page(){
    if((!is_user_logged_in())){
        echo "you will be redirected to LOGIN page";
        wp_safe_redirect('https://localhost/exampleThree/login/',302);
        exit();
    }else{
    //    echo "ZALOGOWANY";
    }
}
// get loops to select posts
include_once 'get_posts.php';



?>