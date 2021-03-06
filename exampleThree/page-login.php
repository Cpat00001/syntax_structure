<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8" id="login_image"></div>
        <div class="col-sm-12 col-md-4">
            <?php 
            if(!is_user_logged_in()){
                //display user login form
                $args = array(
                    // 'redirect' => admin_url(),
                    //force to redirect after login to custom page/url
                    'redirect' => home_url('loggined'),
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
            <!-- display errors after login failure -->
            <div class="wp_login_error">
                <?php if( isset( $_GET['login'] ) && $_GET['login'] == 'failed' ) { ?>
                    <p id="login_fail"><strong>The password/username you entered is incorrect, Please try again.</strong></p>
                <?php } 
                else if( isset( $_GET['login'] ) && $_GET['login'] == 'empty' ) { ?>
                    <p id="login_fail"><strong>Please enter both username and password.</strong></p>
                <?php } ?>
            </div> 
        </div>
    </div>
</div>


<?php include 'footer.php';  ?>