<?php 
// function post_by_category() {
//     // the query
//     $the_query = new WP_Query( array( 
//         'category_name' => 'secret', 
//         'posts_per_page' => 3
//     ) ); 
//     //var_dump($the_query);
//     //Loop posts "secret" category
//     if($the_query->have_posts()){
       
//         while($the_query->have_posts()){ 
//             echo "<div class='container_secret'>";
//             echo "<div class='secret_post'>";
//             $the_query->the_post();
//             echo "<li><h5>" . get_the_title() ."</h5></li><br>";
//             echo "<p>" . the_excerpt()."</p>";
//             echo "<a href=" the_permalink();  ">test</a>";
//             echo "</div>";
//             echo "</div>";
//         }
//     }
// }
function post_by_category() {
    // the query
    $the_query = new WP_Query( array( 
        'category_name' => 'secret', 
        'posts_per_page' => 3
    ) ); 
    //var_dump($the_query);
    //Loop posts "secret" category
    if($the_query->have_posts()){
       
        while($the_query->have_posts()){ ?>
            <div class='container_secret'>
            <div class='secret_post'>
                <?php $the_query->the_post();?>
                <li><h5><?php get_the_title(); ?></h5></li><br>
                <p><?php the_excerpt(); ?></p>
                <div id="btn-cont">
                    <a href="<?php echo the_permalink(); ?>"><button type="button" class="btn btn-warning secret-btn">Read more..</button></a>
                </div>
            </div>
            </div>
            <?php 
        }
    }
}

// restore original post data
wp_reset_postdata();
// Add a shortcode
add_shortcode('category_secret','post_by_category'); ?>