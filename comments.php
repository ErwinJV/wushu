<?php
use theme\php\helpers\Comment;

/**
 *  The template for displaying comments
 */
if(post_password_required()){
     return;
}

$comment = new Comment();

?>
<div id="comments" class="comments">
   <?php if(have_comments()): ?>
    <h2 class="text-2xl mb-3">
      <?php echo __('Posts comments',SITE_NAME); ?>
    </h2>

    <ol class="bg-white">
       <?php wp_list_comments(
         [
            'type'=>'comment',
             'callback'=> [$comment,'view_comments']

         ]
       ); ?>
    </ol>
   <?php endif; ?>


</div>



