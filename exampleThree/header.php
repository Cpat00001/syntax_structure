<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title><?php wp_title(); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class('owncustom'); ?>>
    
<!-- responsive navbar -->
<nav class="navbar navbar-expand-lg" id="header">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><p>Menu</p></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="https://localhost/exampleThree/">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>./media/log1.png" id='logo' class="img-fluid">
        </a>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <!-- display menu conditionally login:logout menu -->
            <?php 
            $condition = is_user_logged_in();
            $show_menu = $condition ? wp_nav_menu(array('menu' => 'Menu 2')):wp_nav_menu(array('theme-location' => 'header-menu'));
            ?>
        </ul>
    </div>
    </nav>
    <!-- ajax call to show opening hours -->
    <?php  include_once 'js/ajax_call.js';?>


    
  






    
