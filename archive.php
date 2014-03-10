<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div id="blog" class="section group">
	<?php if (have_posts()) : ?>
		
		
		  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Category: <?php single_cat_title(); ?></h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php the_time('F jS, Y'); ?> Archive</h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php the_time('F, Y'); ?> Archive</h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php the_time('Y'); ?> Archive</h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
		

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				<?php co_disclaimer_old(); ?>
				
				<p class="postmetadata"><small>Posted <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> in  <?php the_category(', ') ?> | <?php the_tags('Tags: ', ', ', ' '); ?> | <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small></p>

				<div class="entry group">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
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
