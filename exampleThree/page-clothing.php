<?php get_header(); ?>

<p>Category: <?php single_cat_title(); ?></p>
<?php 
    if(is_category('clothing')){ 
        echo "CLOTHING";
    
    }else{
        $args = array( 
        'post_type' => 'product',
        'posts_per_page' => '5'  
        );
        $query = new WP_Query($args);
        var_dump($query);

        // if($query->have_posts()){
        //     echo '<ul>';
        //     while($query->have_posts()){
        //         $query->post();
        //         //var_dump($query->post());
        //         echo '<li>' . $query->post_title .'</li>';
        //     } 
        //     echo '</ul>';
        // }
        // echo "NOPE <br>";
        // $query = new WP_Query('slug="clothing"');
        // var_dump($query);
        // custom query
        // global $wpdb;
        // $user_count = $wpdb->get_var( "SELECT * FROM $wpdb->users" );
        // var_dump($user_count);
    } 
    ?>
    


<?php get_footer(); ?>