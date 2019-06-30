<?php
/**
 * Template Name: Show All Guides
 * Template Post Type: page
 **/

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
        <?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'guides', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul class="guides-container">
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <div class="guide-item">
        <a href="<?php the_permalink(); ?>"><h3 class="guide-title"><?php the_field('title'); ?></h3></a>
        <img src="<?php the_field('image'); ?>" />
        <p><?php the_field('excerpt'); ?></p>
        <a href="<?php the_permalink(); ?>"<div class="btn btn-red">View</div></a>
        <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
			
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
