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
 
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <p><?php the_field('title'); ?></p>
        <img src="<?php the_field('image'); ?>" />
        <p><?php the_field('excerpt'); ?></p>
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
