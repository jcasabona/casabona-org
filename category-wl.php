<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div id="blog" class="section group">
	<?php if (have_posts() && is_admin()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_time('F jS, Y') ?></h2>
				
				<?php co_disclaimer_old(); ?>

				<div class="entry group">
					<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				</div>
			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<?php print_not_found(); ?>

	<?php endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
