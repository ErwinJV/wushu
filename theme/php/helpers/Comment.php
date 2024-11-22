<?php 
namespace theme\php\helpers;

class Comment {
     
    public function view_comments($comment,$args,$depth)
    {
          $GLOBALS['comment'] = $comment;

          switch($comment->comment_type){
            case 'pingback':
            case 'trackback':
        ?>

        <li class="comment">
            <p>
                <?php _e('Pingback',SITE_NAME); ?> <?php comment_author_link(); ?>
                <?php edit_comment_link(__('Edit',SITE_NAME),' ') ?>
            </p>
        </li>
        <?php

           break;
           default:
        ?>
         
         <li <?php comment_class('comment p-2 bg-white-100 w-full sm:w-[420px] rounded-sm shadow-lg'); ?> id="li-comment-<?php comment_ID(); ?>" >
            <article id="comment-<?php comment_ID(); ?>">
                <div class="comment-meta">
                    <div class="comment-author vcard">
                     <!-- Comment header -->
                      <div class="flex flex-row justify-between items-center">
                       <?php echo get_avatar($comment,30); ?>
                         <div class="comment-metadata  text-xs italic font-bold">
                            <a href="<?php echo esc_url(get_comment_link($comment->comment_ID));?>">
                               <time pubdate datetime="<?php comment_time('c'); ?>">
                                  <?php
                                    printf(
                                        __('%1$s at %2$s', SITE_NAME ),
                                        get_comment_date(),
                                        get_comment_time()
                                    );
                                  ?>
                               </time>
                            </a>
                            <span class="font-semibold"><?php edit_comment_link(__('(Edit)',SITE_NAME),' '); ?></span>
                          </div>

                      </div>
                        
                         <!-- Comment text -->
                         <div class="comment-context">
                              <?php 
                                printf(__('<b class="fn">%s</b> <span class="says hide">says:</span>',SITE_NAME),
                                sprintf('<cite class="fn">%s</cite>',get_comment_author_link()));
                                ;
                              ?>
                                <?php comment_text(); ?>
                         </div>

                          

                          <div class="font-semibold text-xs italic">
                            <?php comment_reply_link(array_merge($args,['depth'=>$depth])); ?>
                          </div>

                          <?php if($comment->comment_approved == '0'): ?>
                               <em><?php _e('Your comment is awaiting moderation.',SITE_NAME); ?></em>
                          <?php endif; ?>
                    </div>
                </div>
            </article>
         </li>
          
        <?php
        
          
          }
    }
}