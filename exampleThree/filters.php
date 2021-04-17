<!-- html form -->
<div class="container">
    <div class="row" style="margin-top:0.5rem;">
        <div id="select_color" class="col-sm-12 col-md-9">
        <h5>choose your filters and search:</h5>
        <!-- form -->
        <form method="GET" action="<?php echo htmlspecialchars($_SERVER[" __FILE__ "]);?>">
            <label for="color"><?php _e('Search by color','textdomain') ?></label><br>
            <select name="color" id="color">
                <option value="<?php _e('red','textdomain') ?>">Red</option>
                <option value="<?php _e('blue','textdomain'); ?>">Blue</option>
                <option value="<?php _e('green','textdomain') ?>">Green</option>
            </select>
            <br><br>
            <input type="submit" id="filter_search" value="Search">
        </form>

      </div>
      <div id="filter_hints" class="col-sm-12 col-md-3">
        <p>Set filters according to you search preferences</p><br>
        <p>When you are happy with your credentials hit Search button</p>
      </div>
    </div>
</div>
<div class="container" style="border:2px solid white;margin-bottom:50px;">
    <h5>Results according to your filters</h5>
    <!-- process form -->
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $color = $_GET['color'];
            echo "used filters: " . $_GET['color'] . ' <br><br> ';
        //prepqre query
        $args_color = array(
            'post_type' => 'product',
            'tax_query'      => array( array(
                'taxonomy'        => 'pa_color',
                'field'           => 'slug',
                'terms'           =>  $color,
                'operator'        => 'IN',
            ) )
            );
        //execute
        $loop_color = new WP_Query( $args_color );
        if ( $loop_color->have_posts() ) {
            while ( $loop_color->have_posts() ){
                $loop_color->the_post();
                wc_get_template_part( 'content', 'product' );

            } 
        } else {
            echo __( 'No products found' );
        }
        wp_reset_postdata();
        }
        // #####
        ?>
</div>

