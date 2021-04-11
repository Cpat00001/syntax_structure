<?php get_header(); ?>

<p>Category: <?php single_cat_title(); ?></p>
<?php 
    if(is_category('Clothing')){ 
        echo "CLOTHING";
    
    }else{
        echo "NOPE";
    } 
    ?>


<?php get_footer(); ?>