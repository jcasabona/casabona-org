<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

<div id="blog" class="section group">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php co_disclaimer_old(); ?>
			<div class="entry group">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>				

				<p class="postmetadata alt">
						Posted on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?> | Category <?php the_category(', ') ?> | <?php the_tags( 'Tags: ', ', ', '|'); ?>
						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							<a href="#respond">Comment</a> |

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Comments are currently closed | 

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							<a href="#respond">Comment</a> | 

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed. | 

						<?php } edit_post_link('Edit this entry','','.'); ?>

				</p>
			</div>
		</article>

	<div class="comments group"><?php comments_template(); ?></div>
	
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
