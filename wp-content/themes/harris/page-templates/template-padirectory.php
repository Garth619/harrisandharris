<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">

<div class="internal_container">
	
	<div class="pa_directory_wrapper">
		
			<h1 class="internal_header cr_header no_bar"><?php the_title();?></h1>
			
			<div class="pa_inner_directory">
		
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
			</div><!-- pa_inner_directory -->
		
	</div><!-- pa_directory_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->
						

<?php get_footer(); ?>
