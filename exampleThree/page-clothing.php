<?php get_header(); ?>

<?php
    // dzialajaca petla
    // $args = array('post_type' => 'product','product_cat' => 'clothing','posts_per_page'=> 10);

    // $loop = new WP_Query($args);
    ?>
    <!-- <div class="container"> -->
        <?php
            // if($loop->have_posts()){
            //     while($loop->have_posts()){
            //         $loop->the_post();
            //         wc_get_template_part( 'content', 'product' );
            //     } 
            // } else {
            //     echo __('<p>Sorry no posts found</p>');
            // }
        ?>
    <!-- </div> -->

    <!-- now blok testowy -->
<?php
$args = array('post_type' => 'product','product_cat' => 'clothing','posts_per_page'=> 10);

$loop = new WP_Query($args);
?>
<div class="container">
<?php
        if($loop->have_posts()){
            while($loop->have_posts()){
                ?>
                <div style="background-color: rgb(122, 122, 120); border:2px solid grey; margin:5px;padding:10px;">
                <?php
                $loop->the_post();
                wc_get_template_part( 'content', 'product' );
                ?>
                </div>
                <?php
            } 
        } else {
            echo __('<p>Sorry no posts found</p>');
        }
    ?>
</div>
    
    


<?php get_footer(); ?>