<!-- html form -->
<div class="container">
    <div class="row" style="margin-top:0.5rem;">
        <div id="select_color" class="col-sm-12 col-md-9">
        <h5>choose your filters and search:</h5>
        <!-- form -->
        <form method="GET" action="<?php echo htmlspecialchars($_SERVER[" __FILE__ "]);?>" class="product_filter_form">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <label for="color"><?php _e('Search by color','textdomain') ?></label><br>
                <select name="color" id="color">
                    <option value="<?php _e('red','textdomain') ?>">Red</option>
                    <option value="<?php _e('blue','textdomain'); ?>">Blue</option>
                    <option value="<?php _e('green','textdomain') ?>">Green</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-3">
                <label for="size"><?php _e('Search by size','textdomain'); ?></label><br>
                <select name="size" id="size">
                    <option value="<?php _e('small','textdomain')?>">Small</option>
                    <option value="<?php _e('medium','textdomain') ?>">Medium</option>
                    <option value="<?php _e('large','textdomain') ?>">Large</option>
                </select>
            </div>
            <div class="class=sm-12 col-md-3">
            <label for="size"><?php _e('Search by destination','textdomain'); ?></label><br>
                <select name="destination" id="destination">
                    <option value="<?php _e('sport','textdomain')?>">Sport</option>
                    <option value="<?php _e('casual','textdomain') ?>">Casual</option>
                </select>
               
            </div>
            <div class="class=sm-12 col-md-3">
            <!-- add fourth product filter -->
            </div>
        </div>
            
            <br><br>
            <input type="submit" id="filter_search" value="Search" class="btn btn-primary btn-lg btn-block">
        </form>

      </div>
      <div id="filter_hints" class="col-sm-12 col-md-3">
        <p>Set filters according to you search preferences</p><br>
        <p>When you are happy with your credentials hit Search button</p>
      </div>
    </div>
</div>
<div class="container" style="border:2px solid white;margin-bottom:50px;">
    <!-- process form -->
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $color = $_GET['color'];
            $size = $_GET['size'];
            $destination = $_GET['destination'];
           var_dump($color);
           echo "<br>";
            var_dump($size);
            echo "<br>";
            var_dump($destination);
        //prepqre query
        $args_color_size = array(
            'post_type' => 'product',
            'relation' => 'AND',
            'tax_query'      => array( array(
                'taxonomy'        => 'pa_color',
                'field'           => 'slug',
                'terms'           =>  $color,
                'operator'        => 'IN',
            ),
            array(
                'taxonomy' => 'pa_size',
                'field' => 'slug',
                'terms' => $size,
                'operator' => 'IN'
            ))
            );
        //execute
        $loop_color = new WP_Query( $args_color_size );
        if ( $loop_color->have_posts() ) {
            while ( $loop_color->have_posts() ){
                $loop_color->the_post();?>
                <h5>Results according to your filters</h5>
                 <?php
                echo "<p class='filter_confirmation_text'> used filters: " . $_GET['color'] . ' , ' . $_GET['size'] . ' , ' . $_GET ['destination'] . '</p><br><br>';
                wc_get_template_part( 'content', 'product' );

            } 
        } else {
            // echo __( 'No products found' );
        }
        wp_reset_postdata();
         }
        // #####
        ?>
</div>

