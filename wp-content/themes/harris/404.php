<?php get_header(); ?>


<div id="internal_main">

<div class="default_container two_col">
	
	<div class="content_left content">
		
		<h1 class="large_internal_header">404 Error<br/> Page Not Found</h1><!-- large_internal_header -->
		
		<div class="not_found_content">
		
			<p>Uh oh! The page you requested for could not be found. The link to this address may be broken or may have moved since your last visit.</p>
		</div><!-- not_found_content -->
		
		<span class="go_back">go back now!</span>
		
		<?php get_template_part( 'loop', 'page' ); ?>
				
	</div><!-- content_left -->
	
		<?php get_sidebar(); ?>
	
</div><!-- default_container -->


<?php get_footer(); ?>