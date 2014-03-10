</div>

<footer>
	
	
	<div class="group">
	<?php	/* Widgetized Area */
					if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Sidebar2') ) : ?>

            <!--BEGIN #widget-search-->
            <div id="widget-search" class="widget">
				<h3>Search</h3>
				<?php get_search_form(); ?>
            <!--END #widget-search--> 
            </div>


    <?php endif; /* (!function_exists('dynamic_sidebar') */ ?>
	</div>

</footer>
	
</div>

<?php wp_footer(); ?>

<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


</body>
</html>