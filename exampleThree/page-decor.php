<?php get_header(); ?>
<h1>category >>> Decor </h1>

<?php 
    if(is_category('Decor')){ 
        echo "decor page works";
    
    }else{
        echo "NOPE";
    } 
    ?>

<?php get_footer(); ?>