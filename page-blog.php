<?php 
/**
 * Template Name: Blog
 */

use theme\php\helpers\Paginate;

 get_header();
?>


<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'date'=>'rand',
    'paged'=>$paged,
    'post_status'=>'publish'
    
);

$posts = new WP_Query( $args );

$paginate = new Paginate();
$paginate->set_posts($posts);

?>

<div class="grid grid-cols-2 gap-4 p-3">
   <div>
       <?php if($posts->have_posts()): ?>
           <?php while($posts->have_posts()): $posts->the_post(); ?>
              <a href="<?php the_permalink(); ?>">
                  <article class="my-5" >
                 <figure class="relative w-full" >
                   <img  
                       src="<?php echo get_the_post_thumbnail_url(); ?>" 
                       alt="<?php get_the_excerpt(); ?>"
                       class="w-full h-full bg-cover"
                       >
   
                   <figcaption class="absolute flex text-sm font-semibold bottom-0 left-0 w-full bg-black opacity-70 text-white p-1" >
                        <h1 class="text-2xl text-white mb-1"><?php the_title(); ?></h1>
                       
                   </figcaption>
                 </figure>
                  </article>
               </a>
           <?php endwhile; wp_reset_postdata();  ?>
       <?php endif; ?> 
       <?php $paginate->get_pagination(); ?>
   </div> 
   <div></div> 
</div>



<?php get_footer(); ?>