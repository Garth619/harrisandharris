<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main">

<div class="internal_container">
	
	<h1 class="internal_header center"><?php the_title();?></h1>
	
	<div class="client_reviews_wrapper">
		
		<?php if(get_field('reviews')): ?>
		 
			<?php while(has_sub_field('reviews')): ?>
		 
				<div class="single_client_review">
			
					<div class="cr_inner">
			
						<div class="cr_left">
				
							<img src="<?php bloginfo('template_directory');?>/images/test-stars.svg"/>
				
							<span class="cr_left_title"><?php the_sub_field( 'review_quote' ); ?></span><!-- cr_left_title -->
				
						</div><!-- cr_left -->
			
						<div class="cr_right">
				
							<div class="cr_content content">
					
								<?php the_sub_field( 'description' ); ?>
					
							</div><!-- cr_content -->
				
						<span class="cr_name"><?php the_sub_field( 'name' ); ?></span><!-- cr_name -->
				
					</div><!-- cr_right -->
			
				</div><!-- cr_inner -->
			
			</div><!-- single_client_review -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
					
	</div><!-- client_reviews_wrapper -->
	
</div><!-- internal_container -->

</div><!-- internal_main -->

<?php get_footer(); ?>
