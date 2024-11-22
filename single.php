<?php get_header(); ?>



    
    <div class="grid grid-cols-12 min-height">
        <article class="col-span-12  max-height overflow-y-auto">
           <h1 class="text-4xl my-5"><?php echo get_the_title(); ?></h1>
           <?php the_content() ?>
        </article>
        <section class="col-span-12 flex flex-col px-6 ">
           <?php if(comments_open() || get_comments_number()): ?>
              <?php comments_template(); ?>
            <?php endif; ?>
            <?php the_comments_pagination();?>
            
            <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')): ?>
                 <p class="no-comments"><?php _e('Comments are closed', SITE_NAME);?></p>
            <?php endif;?>

            <?php view('common.comment-form'); ?>
        </section>
    </div>


<?php get_footer(); ?>