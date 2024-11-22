<?php 

$args = [
    'post_type'=>'post',
    'post_status'=>'publish',
    'orderby'=>'date',
    'posts_per_page'=>12
];

$posts = new WP_Query($args);

?>

<!-- Slider main container -->
<section class="swiper w-[90%] sm:w-[520px] lg:w-[980px] my-12">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper ">
    <!-- Slides -->
   <?php if(have_posts($posts)): ?>
      <?php while($posts->have_posts()): $posts->the_post() ?>  
        
      <article class="swiper-slide relative">
       <img class="w-full bg-cover" 
            src="<?php echo get_the_post_thumbnail_url();?>" 
            alt="<?php get_the_excerpt(); ?>" 
        />
         <span class="absolute bottom-0 left-0 w-full bg-black opacity-50 p-5">
            <h1 class="text-xl text-white font-bold"><?php echo get_the_title(); ?></h1>
            <p class="text-sm text-white font-bold"><?php echo get_the_excerpt(); ?></p>
         </span>
      </article>
      <?php endwhile; wp_reset_postdata(); ?>

    <?php endif; ?>
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</section>
