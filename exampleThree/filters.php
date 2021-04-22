

<!-- html form -->
<div class="container">
    <div class="row" style="margin-top:0.5rem;">
        <div id="select_color" class="col-sm-12 col-md-9">
        <h5>choose your filters and search:</h5>
        <!-- form -->
        <form method="GET" action="<?php echo htmlspecialchars($_SERVER[" __FILE__ "]);?>" class="product_filter_form">
        <input type="hidden" name="search_button" value="true" />
        <div class="row">
            <div class="col-sm-12 col-md-2">
                <label for="color"><?php _e('Search by color','textdomain') ?></label><br>
                <select name="color" id="color">
                    <option value="<?php _e('red','textdomain') ?>">Red</option>
                    <option value="<?php _e('blue','textdomain'); ?>">Blue</option>
                    <option value="<?php _e('green','textdomain') ?>">Green</option>
                </select>
            </div>
            <div class="col-sm-12 col-md-2">
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
            <div class="class=sm-12 col-md-5">
            <!-- radio buttons -->
            <input type="radio" id="OR" name="relation" value="OR">
            <label for="radio_button_one">One of chosen parameters</label>
            <br>
            <span class="radioError"><?php echo $radioError; ?></span>
            <br>
            <input type="radio" id="AND" name="relation" value="AND">
            <label for="radio_button_two">Contains ALL parameters</label>
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
</div>

    <!-- process form -->
    <?php

//empty errors
$radioError = '';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $color = $_GET['color'];
    $size = $_GET['size'];
    $destination = $_GET['destination'];
    $radio = $_GET['relation'];
    if(empty($_GET['relation'])){
        $radioError = " ** Check radio button";
    }else{
        $radioError = ' ';
    }
    $submit = $_GET['search_button'];
    // var_dump($submit);
   var_dump($color);
   echo "<br>";
    var_dump($size);
    echo "<br>";
    var_dump($destination);
    echo "<br>";
    var_dump($radio);
//prepqre query
$args_color_size_destination = array(
    'post_type' => 'product',
    // 'relation' => 'AND',
    'tax_query'      => array(
        'relation' => $radio,
        array(
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
    ),
    array(
        'taxonomy' => 'pa_destination',
        'field' => 'slug',
        'terms' => $destination,
        'operator' => 'IN',
    ))
    );
//execute
$loop_color = new WP_Query( $args_color_size_destination ); ?>
<h5>Results according to your filters</h5>
<?php
if ( $loop_color->have_posts() ) {
    while ( $loop_color->have_posts() ){
        $loop_color->the_post();?>
        <div class="container" style="background-color:peru;border:2px solid violet;margin-bottom:0.25rem;">
        <?php
        echo "<p class='filter_confirmation_text'> used filters: " . $_GET['color'] . ' , ' . $_GET['size'] . ' , ' . $_GET ['destination'] . '</p><br><br>';
        wc_get_template_part( 'content', 'product' );
        ?>
        
        </div>
        
<?php
    } 
} else { ?>
    <div class="container">
     <?php echo __( '<h5>Search for products.So far No products found</h5>' ); ?>
    </div>
<?php 
}
wp_reset_postdata();
 }
// #####
?>



