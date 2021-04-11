<?php get_header(); ?>

<h1>Category Page</h1>
<h5 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h5>
<p><?php single_cat_title('Currently browsing '); ?>.</p>

<?php get_footer(); ?>