<?php 
/**
 * Template Name: Blog
 */
 get_header();
?>

<h1 class="text-4xl">Blog h</h1>

<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 5,
    
);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt();  
 ?></p>
        <?php
    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}
?>

<?php get_footer(); ?>