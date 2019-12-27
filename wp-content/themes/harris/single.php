<?php get_header(); ?>

<div id="internal_main">

<div class="default_container two_col">
	
	<div class="content_left content">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- default_blog_header -->
		
		<?php get_template_part( 'loop', 'single' ); ?>
				
	</div><!-- content_left -->
	
		<?php get_sidebar('blog'); ?>
	
</div><!-- default_container -->


</div><!-- internal_main -->
				

<?php get_footer(); ?>




