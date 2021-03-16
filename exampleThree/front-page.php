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
    } // end while
} // end if
wp_reset_query();
?>
 </div> <!-- end of row -->
</div>
<!-- Choose day of your visit DIV-->
<div class="container choose_day">
    <div class="row">
        <div class="col-sm-12 col-md-6" style="background-color:rgb(77, 168, 196);">
            <div class="row">
                <div class="col-12">
                    <h5>Select a day - Check opening hours</h5>
                </div>
                <div class="col-12">
                    <!-- form to choose a day -->
                    <form action=""> 
                    <select name="openhours" onchange="showOpenHours(this.value)">
                        <option value="">Select a day:</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                    </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6" style="background-color:rgb(186, 60, 176);">
            <h5>Check opening hours</h5>
            <div id="showHours">Open: ...</div>
        </div>
    </div>
 </div>
<?php include 'footer.php'; ?>
