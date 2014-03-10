<?php
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images"); 

add_theme_support( 'nav-menus' );

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main' => 'Main Nav'
		)
	);
}


/*****Sidebars!******/

register_sidebar( array (
	'name' => __( 'Sidebar', 'main-sidebar' ),
	'id' => 'primary-widget-area',
	'description' => __( 'The primary widget area', 'wpbp' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array (
	'name' => __( 'Sidebar2', 'secondary-sidebar' ),
	'id' => 'secondar-widget-area',
	'description' => __( 'The seconardy widget area', 'wpbp' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array (
	'name' => __( 'Sidebar Home', 'home-sidebar' ),
	'id' => 'home-widget-area',
	'description' => __( 'The homepage  widget area', 'cbona' ),
	'before_widget' => '<div class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array (
	'name' => __( 'Home Aside', 'home-aside' ),
	'id' => 'home-aisde',
	'description' => __( 'The widgets on the left on the homepage', 'cbona' ),
	'before_widget' => '<div class="widget %2$s">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array (
	'name' => __( 'Home Featured', 'home-featured' ),
	'id' => 'home-featured',
	'description' => __( 'The featured section of the homepage', 'cbona' ),
	'before_widget' => '<article class="widget featured-widget %2$s">',
	'after_widget' => "</article>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );



register_sidebar( array (
	'name' => __( 'Sidebar Resume', 'resume-sidebar' ),
	'id' => 'resume-widget-area',
	'description' => __( 'The resume  widget area', 'cbona' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => "</div>",
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

function casabona_twitter_handles($content){
	$pattern= '/(?<=^|(?<=[^a-zA-Z0-9-_\.]))@([A-Za-z]+[A-Za-z0-9_]+)/i';
	//$pattern= array('|@([a-zA-Z0-9_]*)|');
	$replace= '@<a href="http://www.twitter.com/$1">$1</a>';
	$content= preg_replace($pattern, $replace, $content);
	return $content;
}

add_filter( "the_content", "casabona_twitter_handles" );


function co_excerpt_more( $more ) {
	return '...<a class="read-more" href="'. get_permalink( get_the_ID() ) . '">more</a>';
}
add_filter('excerpt_more', 'co_excerpt_more');


//Actions packed!

function co_portfolio_posts( $query ) {
    if ( is_admin() || ! $query->is_main_query() )
        return;

    if ( is_post_type_archive( 'portfolio' ) ) {
        $query->set( 'posts_per_page', 9 );
        return;
    }
}
add_action( 'pre_get_posts', 'co_portfolio_posts', 1 );


function co_scripts() {
	wp_enqueue_script('responsive-nav', TEMPPATH.'/js/responsive-nav.min.js');
	wp_enqueue_script('typekit', '//use.typekit.net/bev5ovw.js');
}

add_action( 'wp_enqueue_scripts', 'co_scripts' );

function co_footer_scripts(){
	
	if(is_admin()){
		echo '<!-- Start of Amazon Publisher Studio Loader -->    <script>  window.amznpubstudioTag = "revengofthene-20";  </script>    <!-- Do not modify the following code ! -->  <script async="true" type="text/javascript" src="http://ps-us.amazon-adsystem.com/domains/revengofthene-20_fd0dac2d-eeda-4af9-8933-b57ad19f197f.js" charset="UTF-8"></script>    <!-- End of Amazon Publisher Studio Loader -->';
	}
	
	
}

add_action('wp_footer', 'co_footer_scripts');


function print_post_nav($single=1){

	
?>
	
		<div class="navigation group">
			<div class="alignleft"><?php next_posts_link('&laquo; Older') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer &raquo;') ?></div>
		</div>
<?php

}

function print_not_found(){
?>
		<h3 class="center">No posts found. Try a different search?</h3>
		<?php get_search_form(); ?>
<?php
}


function co_disclaimer_old(){

	if( get_the_time('Y') < 2007){
		?>
			<div class="highlight">
				<p>This post was written before 2007. As a result, there may be crude language and poor grammar. I was young and fairly immature. To be fair, I still kind of am, but I try not to let that shine through on here anymore. Either way, I apologize for the poorly written thoughts and non-G rated language.</p>
			</div>
		<?php
	}
}
