<?php
/** 
Template Name: New Home
**/
?>

<?php get_header(); ?>

	<div id="about" class="section group">
	<?php get_sidebar('portfolio'); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

	<?php endwhile; endif; ?>
	
	<?php get_sidebar('home'); ?>
	
	</div>


<?php get_footer(); ?>

