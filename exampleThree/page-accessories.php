<?php get_header(); ?>
<?php 
$get_path = pathinfo(__FILE__);
//var_dump($get_path);
include 'get_product_category.php';
include 'filters.php';
?>
<div class="container">
    <h5><?php echo $up_chop_string; ?></h5>
    <div class="row">
        <div class="col-10" style="background-color:pink;">
            <h5>List of products</h5>
            <?php
                // $args = array('post_type' => 'product','product_cat'=>'accessories','posts_per_page' => '30');
                $args = array('post_type' => 'product','product_cat'=>$up_chop_string,'posts_per_page' => '30');

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

<?php
// $cat = is_product_category('accessories');
//$cat = $_SERVER['REQUEST_URI'];
// podaj dynamicznie nazwe strony/kategorii z URL , 
//wtedy dynamicznie mozesz podawac filtry wyszukiwania do kazdej,podajac jako $var do filters.php
// a w filters do $args_color_size_destination jako product_cat podasz wynik wlasnie ze zmiennej
// $c = pathinfo(__FILE__);
// $a = $c['filename'];
// var_dump($a);
// $b = $_SERVER['PHP_SELF'];
// echo "<h1>Rzuc wynik " . $a ."</h1>";
// echo "<br>";
// $find = '-';
// $d = strpos($a,$find);
// $d_plus_one = intval($d) + 1;
// var_dump($d_plus_one);
// $sl = strlen($a);
// $dl = intval($sl - $d_plus_one);
// $chop_string = substr($a,-$dl);
// echo "<h5>wystepuje w numerze: </h5> " . $d . " string length:" . $sl . "<br> dlugosc str:" . $dl ; 
// echo "<br>";
// var_dump($chop_string);
// jesli masz juz zlapany string dynamicznie po wystepujacym page-{} to podaj to do WP_QUERY
?>



<?php get_footer(); ?>