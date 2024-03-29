<?php get_header(); ?>

<div id="blog" class="section group">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2><?php the_title(); ?></h2>

			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

	<?php endwhile; endif; ?>
	
	<?php print_post_nav(0); ?>
	
	</div>

	<?php get_sidebar(); ?>


<?php get_footer(); ?>

