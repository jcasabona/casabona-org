<?php
/** 
Template Name: Home
**/
?>

<?php get_header(); ?>

	<div id="about" class="section group">

		<?php get_sidebar('home-aside'); ?>
	
		<section class="home-content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
				</div>
			<?php endwhile; endif; ?>

			<?php get_sidebar('home'); ?>

			<?php dynamic_sidebar('home-featured'); ?>
		</section>


	</div>


<?php get_footer(); ?>

