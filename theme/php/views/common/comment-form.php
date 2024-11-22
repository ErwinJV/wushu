<?php 

$commenter = wp_get_current_commenter();
$fields = [
    'author'=> '<div class="comment-form-group">
                <div class="comment-input-group">
                   <label class="comment-label-input" for="author">'.__("Author",SITE_NAME).'</label>
                   <input type="text" id="author" name="author"  placeholder="'.__("Author",SITE_NAME).'" value="'.$commenter['comment_author'].'" />
                </div>',
   'email'=>'<div class="comment-input-group">
                 <label class="comment-label-input" for="email">'.__("Email",SITE_NAME).'</label>
                 <input type="email" id="email" name="email"  placeholder="'.__("Email",SITE_NAME).'" value="'.$commenter['comment_author_email'].'" />
             </div>',
   'url'=> '<div class="comment-input-group">
                 <label class="comment-label-input" for="url">'.__("Url",SITE_NAME).'</label>
                 <input type="text" id="url" name="url" placeholder="'.__("Url",SITE_NAME).'" value="'.$commenter['comment_author_url'].'" />
            </div>
            </div>
            ',

];
 $args =  [
    'id_form'           => 'commentForm',
    'class_form'      => 'comment-form',
    'id_submit'         => 'submitComment',
    'class_submit'      => 'p-2 bg-red',
    'name_submit'       => 'submit',
    'title_reply'       => __( 'Leave a Reply', SITE_NAME ),
    'title_reply_to'    => __( 'Leave a Reply to %s',SITE_NAME ),
    'cancel_reply_link' => __( 'Cancel Reply',SITE_NAME ),
    'label_submit'      => __( 'Post Comment',SITE_NAME ),
    'format'            => 'xhtml',


    'comment_field' =>  '<div class="comment-input-group">
                           <label for="comment" class="comment-input-label">' . _x( 'Comment', 'noun' ) .'</label>
                           <textarea id="comment" name="comment"  aria-required="true" >' .
                           '</textarea>
                        </div>',


    'must_log_in' => '<p class="must-log-in">' .
      sprintf(
        __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
        wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
      ) . '</p>',


    'logged_in_as' => '<p class="logged-in-as">' .
      sprintf(
      __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
        admin_url( 'profile.php' ),
        get_current_user(),
        wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
      ) . '</p>',


    'comment_notes_before' => '<p class="comment-notes">' .
      __( 'Your email address will not be published.' ) .
      '</p>',


    // 'comment_notes_after' => '<p class="form-allowed-tags">' .
    //   sprintf(
    //     __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
    //     ' <code>' . allowed_tags() . '</code>'
    //   ) . '</p>',
      
      'fields' => apply_filters('comments_form_default_fields', $fields)
];


comment_form($args); 

?>



