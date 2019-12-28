<?php get_header(); ?>


							
<div id="internal_main">

<div class="default_container two_col">
	
	<div class="content_left content">
		
		<h1 class="large_internal_header">
			
			<?php if ( is_day() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
				
			<?php elseif ( is_month() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
				
			<?php elseif ( is_year() ) : ?>
				
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
			
			<?php else : ?>
				
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
			
			<?php endif; ?>
			
		</h1><!-- large_internal_header -->
		
				
			<?php rewind_posts();?>

			<?php get_template_part( 'loop', 'index' ); ?>
				
	</div><!-- content_left -->
	
		<?php get_sidebar('blog'); ?>
	
</div><!-- default_container -->


</div><!-- internal_main -->
				
			


<?php get_footer(); ?>


		




