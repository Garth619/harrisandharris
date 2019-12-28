<?php get_header(); ?>


<div id="internal_main">

<div class="default_container two_col">
	
	<div class="content_left content">
		
		<h1 class="large_internal_header"><?php the_field( 'not_found_title','option'); ?></h1><!-- large_internal_header -->
		
		<div class="not_found_content">
		
			<?php the_field( 'not_found_content','option'); ?>
			
		</div><!-- not_found_content -->
		
		<span class="go_back"><?php the_field( 'go_back_verbiage','option'); ?></span>
				
	</div><!-- content_left -->
	
		<?php get_sidebar(); ?>
	
</div><!-- default_container -->


<?php get_footer(); ?>