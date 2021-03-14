<?php include 'header.php'; ?>


<div class="container front_first_row" >
    <div class="row">
        <div class="col-8 tlo">
            <div class="tlo_in">
                <h5 class="center">Welcome. Front page of new idea</h5>
            </div>
        </div>
    </div>
</div>
<!-- second row - posts -->
<div class="container front_second_row" >
   
<h5>Check our last news</h5>
<!-- display posts horizontally  -> 3 in row -->
<div class="row">
<?php
if ( have_posts() ) {
    while ( have_posts() ) { the_post(); ?>
            <div class="col-sm-12 col-md-4">
               <!-- <div style="border: 2px solid black;">
                <h5><?php the_title(); ?></h5>
                <p><?php the_content(); ?></p>
               </div> -->
               <div class="card front_card">
               <?php if(has_post_thumbnail()){?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="post_image_good_for_SEO_description">
                <?php } ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <a href="<?php echo the_permalink(); ?>" class="btn btn-primary">Read more..</a>
                    </div>
                </div>
            </div>
     <?php
    } // end while
} // end if
wp_reset_query();
?>
 </div> <!-- end of row -->
</div>





<?php include 'footer.php'; ?>
