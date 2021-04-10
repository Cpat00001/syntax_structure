<div class="container">
<div class="row">
    <div class="col-sm-12 col-md-6" id="left-category">
        <div class="row">
            <div class="col-sm-12" style="background-color:orchid;">
                <h5>Search by category</h5>
            </div>
            <div class="col-sm-12 id="cat_results" style="background-color:orchid;">
            <?php
                // prepare args to loop throught categories
                $args = array(
                        'taxonomy' => 'product_cat',
                        'orderby' => 'name',
                        'order' => 'ASC',
                        'number' => false
                );
                ?>
                <ul>
                <?php
                //execute loop
                foreach( get_terms($args) as $category){
                    //var_dump($category);
                    ?>
                    <li><?php echo $category->name ?> <span style="color:blue;">(<?php echo $category->count; ?>)</span></li>
                <?php
                } // closing bracket
                ?>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="col-sm-12 col-md-6" id="right-category" style="background-color:orange;">
        <h5>show nice promo in particular category </h5>
    </div>
</div>
</div>


