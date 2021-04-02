<!-- comments approved -->
<?php 
$args = array('status' => 'approve' );

// comments query
$comment_query = new WP_Comment_Query;
$comments = $comment_query->query($args);
// bring and display comments div
include_once 'comments/display_comments.php';
?>

