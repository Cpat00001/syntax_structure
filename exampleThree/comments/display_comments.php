<!-- comments template -->
<div class="container" id="dsp_comment">
 <!-- show amount of comments -->
 <?php 
    // $post_id = $post->ID;
//get number of comments for specific post and convert to int, then do checks if-else,and display message 
$number_of_comments = intval(get_comments_number($post_id));
// var_dump($number_of_comments);
    
    function abc($number_of_comments){
        if($number_of_comments === 0){
            $times = "No comments found, be first to comment ";
            return $times;
        }elseif ($number_of_comments === 1){
            $times = 'Commented: ' . $number_of_comments . ' time';
            return $times;
        }else{
            $times = 'Commented: ' . $number_of_comments . ' times';
            return $times;
        }
    }
    ?>
<p><?php echo abc($number_of_comments); ?></p>
<?php
// var_dump($comments);
if($comments){
    foreach($comments as $comment){ ?>
        <div style="border:2px solid black;margin-bottom:2px;padding:1rem">
            <p><?php echo $comment->comment_content ?></p>
            <p style="color:red;"> Author: <?php echo $comment->comment_author ?></p>
            <p style="color:red;"> Commented: <?php echo $comment->comment_date ?></p>
        </div>
    <?php
    }
}
?>

</div>
<!-- div container with a WordPress comment form pass $args with styling -->
<div class="container" style="background-color:orangered;padding:1rem;">
    <?php 
    
    $args = array(
        'title_reply' => '',
        'label_submit' => 'Submit comment',
        'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn btn-primary mb-2" value="%4$s" />',
        'comment_field' => '<p class="comment_textarea"><label  for="comment_textarea">Leave a comment</label><textarea id="comment" name="comment" aria-required="true" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></p>'
    );
    echo comment_form($args); 
    ?>
</div>