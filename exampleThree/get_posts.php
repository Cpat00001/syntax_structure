<?php 

// @@@@@@ select and get posts "News"
function post_category_news() {
    //ars passed to query
    $args = array('category_name' => 'news', 'posts_per_page' => 3);
    // the query
    $the_query = new WP_Query($args); 
    //var_dump($the_query);
    //Loop posts "secret" category
    if($the_query->have_posts()){
       
        while($the_query->have_posts()){ ?>

            <div class="col-sm-12 col-md-4">
                        <?php $the_query->the_post(); ?>
                        <!-- <div style="border: 2px solid black;">
                            <h5><?php the_title(); ?></h5>
                            <p><?php the_content(); ?></p>
                        </div> -->
                        <div class="card front_card">
                        <?php if(has_post_thumbnail()){?>
                                <img src="<?php echo the_post_thumbnail_url('custom-post-image-size'); ?>" class="img-fluid" alt="post_image_good_for_SEO_description">
                            <?php } ?>
                                <div class="card-body">
                                    <a href="<?php the_permalink();?>" class="post_link"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                    <p class="card-text"><?php echo get_excerpt(); ?></p>
                                    <a href="<?php echo the_permalink(); ?>" class="btn btn-primary">Read more..</a>
                                </div>
                            </div>
                        </div>
        <?php 
        }
    }
}
wp_reset_postdata();
add_shortcode('category_news','post_category_news');
//  @@@@@@@@@@@@@@@@@@@@

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
                <div class="img" id="center_secret_img">
                    <img src="<?php echo the_post_thumbnail_url('custom-post-image-size'); ?>" class="img-fluid">
                </div>
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