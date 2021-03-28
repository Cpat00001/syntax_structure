<?php get_header(); ?>

<div class="container">
    <h2><?php the_title(); ?></h2>
</div>
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();?>
            <div id="single_post">
            <p><?php the_content(); ?></p>
            </div>

        <?php    
        }
    }

?>
<?php get_footer(); ?>
