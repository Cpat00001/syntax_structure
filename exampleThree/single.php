<?php
    // check if post is "secret" if yes, check whether user is loginnedIN
    if(in_category('secret')){
        do_action('check_login'); 
    }
?>
<!--header -->
<?php get_header(); ?>

<div class="container">
    <h2><?php the_title(); ?></h2>

<?php
    if(have_posts()){
        while(have_posts()){
            the_post();?>
            <div class="row">
                <div class="col-sm-4">
                     <!-- thumbnail -->
                    <div id="single_post_img">
                        <?php
                            if(has_post_thumbnail() && is_single()){ ?>
                                <!-- the_post_thumbnail($post->ID,'singlepost_img'); -->
                                <img src="<?php echo the_post_thumbnail_url('singlepost_img'); ?>" class="img-fluid img-rght">
                            <?php     
                            } 
                            ?>
                    </div>
                </div>
                <!-- post content -->
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-12" id="single_post">
                            <p><?php the_content(); ?></p>
                        </div>
                        <div class="col-12">
                            <!-- post's comments -->
                            <?php 
                                if(comments_open()){
                                    
                                    echo comments_template();
                                    
                                } 
                            
                            ?>
                        </div>
                    </div>
                    
                </div>
            </div>
           

          

        <?php    
        }
    }

?>
</div> 
<!-- footer -->
<?php get_footer(); ?>