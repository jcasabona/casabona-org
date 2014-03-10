<?php get_header(); ?>

	<div id="about" class="section left group">
	
	<?php if(!wp_is_mobile()) get_sidebar('portfolio'); ?>
	
	<?php 
		//get_posts(array'posts_per_page')
		if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="project group">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<img src="<?php print jlc_project_image_url($post->ID); ?>" alt="<?php the_title(); ?>" class="alignleft" />
			
			<div class="project-info">
				<?php the_excerpt(); ?>
				<p><?php print jlc_project_link($post->ID); ?></p>
			</div>
			
		</div>
		
	<?php endwhile; endif; ?>
	
	<div class="navigation"><?php posts_nav_link('/', 'newer &gt;', '&lt; older'); ?></div>
	
	<?php if(wp_is_mobile()) get_sidebar('portfolio'); ?>
	
	
	</div>


<?php get_footer(); ?>

