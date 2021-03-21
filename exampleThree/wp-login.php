<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8" id="login_image"></div>
        <div class="col-sm-12 col-md-4">
            <h2>Custom_WP_Login Page</h2>
            <?php 
            if(!is_user_logged_in()){
                //display user login form
                $args = array(
                    'redirect' => admin_url(),
                    'form_id' => 'loginform_custom',
                    'label_username' => __('Username'),
                    'label_password' => __('Password'),
                    'label_remember' => __('Remember Me'),
                    'label_log_in' => __('Login'),
                    'remember' => false
                );
                wp_login_form($args);
            }else{
                //user is already loggined
                wp_loginout(home_url()); // display "log out" link
            }
            ?>
        </div>
    </div>
</div>

<?php include 'footer.php';  ?>