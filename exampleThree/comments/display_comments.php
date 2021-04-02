<!-- comments template -->
<div class="container" id="dsp_comment">
<?php 
// var_dump($comments);
if($comments){
    foreach($comments as $comment){ ?>
        <div style="border:2px solid black;margin-bottom:2px;padding:1rem">
            <p><?php echo $comment->comment_content ?></p>
            <p style="color:red;"> Author: <?php echo $comment->comment_author ?></p>
        </div>
    <?php
    }
}else{
    ?>
    <p>No comments found, be first to comment </p>
<?php 
}
?>

</div>
<div class="container" style="background-color:orangered;padding:1rem;">
    <?php echo comment_form(); ?>
</div>