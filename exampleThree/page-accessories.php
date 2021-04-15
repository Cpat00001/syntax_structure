<?php get_header(); ?>
<div class="container">
    <h5>Accessories</h5>
    <div class="row">
        <div class="col-10" style="background-color:pink;">
            <h5>List of products</h5>
            <?php
                $args = array('post_type' => 'product','product_cat'=>'accessories','posts_per_page' => '30');
            $loop = new WP_Query($args);

            if($loop->have_posts()){
                while($loop->have_posts()){?>
            <div style="background-color: rgb(122, 122, 120);margin:5px;border:2px solid black;padding:10px;">
                <?php
                        $loop->the_post();
                        wc_get_template_part('content','product');
                        ?>
                </div>
                <?php
                }
            }

            ?>
        </div>
        <div class="col-2" style="background-color:orange;">
            <h5>The cheapest in this category</h5>
            <?php
            $q_cheap_category = array(
                            'post_type' => 'product',
                            'orderby'   => 'meta_value_num',
                            'meta_key'  => '_regular_price',
                            'product_cat' => 'accessories',
                             'order'=>'ASC',
                             'posts_per_page' => '3',
                             
                            );
            $loop = new WP_QUERY($q_cheap_category);
            //var_dump($loop);

            if($loop->have_posts()){
                while($loop->have_posts()){?>
                    <div style="background-color:palevioletred;margin:2px;padding:0.2rem;">
                        <?php
                        $loop->the_post();
                        wc_get_template_part('content','product');
                        ?>
                    </div>
                    <?php
                }
            }
            ?>


        </div>
    </div>

</div>



<?php get_footer(); ?>