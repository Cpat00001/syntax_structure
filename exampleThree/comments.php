<!-- comments approved -->
<?php 
 $post_id = $post->ID;
 //echo "Post ID dla array() $post_id";
// show only approved comments
$args = array(
    'status' => 'approve',
    'order' => 'DESC', 
    'post_id' => $post_id, 
    'include_unapproved' => array(is_user_logged_in() ? get_current_user_id() : wp_get_unapproved_comment_author_email())

);

// comments query
$comment_query = new WP_Comment_Query;
//var_dump($comment_query);
$comments = $comment_query->query($args);
//var_dump($comments);
// bring and display comments div
include_once 'comments/display_comments.php';
?>

