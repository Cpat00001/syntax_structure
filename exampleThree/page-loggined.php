<!-- check if user is loggined -->
<?php
do_action('check_login'); 
?>
<?php include 'header.php'; ?>
<?php 
     // get user data
     $user = wp_get_current_user();
     //print_r($user);
?>
<div class="container">
    <div class="row row_profile_page first">
        <div class="col-sm-6 col-md-10 log_main_row_one_left">
            <h5>Welcome <?php echo $user->user_login; ?></h5>
        </div>
        <div class="col-sm-6 col-md-2 log_main_row_one_right">
            <!-- LOGOUT link -->
            <a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>    
        </div>
    </div>
    <div class="row row_profile_page second">
        <div class="col-sm-12">
            <h5>Some more data....</h5>
            <!-- loop post with category Secret -->
           <?php echo do_shortcode('[category_secret]'); ?>

        </div>

    </div>
</div>



<?php include 'footer.php'; ?>