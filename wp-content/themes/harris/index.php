<?php get_header(); ?>


<div id="internal_main">

<div class="default_container two_col">
	
	<div class="content_left content">
		
		<h1 class="large_internal_header">Our Blog</h1><!-- large_internal_header -->
		
		<?php get_template_part( 'loop', 'index' ); ?>
				
	</div><!-- content_left -->
	
		<?php get_sidebar('blog'); ?>
	
</div><!-- default_container -->


</div><!-- internal_main -->



<?php get_footer(); ?>
