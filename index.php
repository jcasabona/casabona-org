<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div id="blog" class="section group">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				
				<?php co_disclaimer_old(); ?>
				
				<p class="postmetadata">Posted <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> in  <?php the_category(', ') ?> | <?php the_tags('Tags: ', ', ', ' '); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>

				<div class="entry group">
					<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				</div>
			</div>

		<?php endwhile; ?>

		<?php print_post_nav(); ?>

	<?php else : ?>

		<?php print_not_found(); ?>

	<?php endif; ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
