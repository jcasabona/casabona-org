<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div id="blog" class="section group">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			
			<img src="<?php print jlc_project_image_url($post->ID); ?>" alt="<?php the_title(); ?>" />
			
			<div class="project-info">		
				<?php the_content(); ?>
				<p><?php print jlc_project_link($post->ID); ?></p>
			</div>
	
	<div class="navigation group">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

	<?php endwhile; else: ?>

		<?php print_not_found(); ?>

<?php endif; ?>


</div>

<?php get_sidebar(); ?>


<?php get_footer(); ?>
