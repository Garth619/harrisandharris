<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">

	<div class="about_container">
		
		<h1 class="internal_header"><?php the_title();?></h1><!-- internal_header -->
		
		<div class="about_inner">
	
		<div class="about_left content">
		
			<div class="about_content">
				
				<?php the_field( 'top_content' ); ?>
								
			</div><!-- about_content -->
		
		</div><!-- about_left -->
			
		<div id="about_right_ani" class="about_right">
			
			<div class="about_image">
			
				<?php $about_picture = get_field( 'about_picture' ); ?>
				
				<?php if ( $about_picture ) { ?>
					
					<img src="<?php echo $about_picture['url']; ?>" alt="<?php echo $about_picture['alt']; ?>" />
				
				<?php } ?>
			
			</div><!-- about_image -->

			<div class="about_quote_wrapper">
				
				<div class="about_quote">
					
					<span><?php the_field( 'about_top_quote' ); ?></span>
					
				</div><!-- about_quote -->
				
			</div><!-- about_quote_wrapper -->
			
		</div><!-- about_right -->
	
	</div><!-- about_inner -->
	
</div><!-- about_container -->

<div class="about_awards">

	<div class="about_wave_top">
		
		<img class="wave top" src="<?php bloginfo('template_directory');?>/images/about-awards-bg.svg"/>
		
	</div><!-- about_wave_top -->
	
	<div class="about_awards_inner">
		
		<div class="about_slider_inner">
		
		<span class="about_slider_title"><?php the_field( 'awards_title' ); ?></span><!-- about_slider_title -->
		
		
			
			<div class="about_slider">
				
				<?php if(get_field('awards_slider')): ?>
				 
					<?php while(has_sub_field('awards_slider')): ?>
				 
						<div class="about_single_slide">
					
							<div class="about_slide_inner">
						
								<div class="about_slide_img_wrapper">
					
									<?php $award_image = get_sub_field( 'award_image' ); ?>
									
									<?php if ( $award_image ) { ?>
										
										<img src="<?php echo $award_image['url']; ?>" alt="<?php echo $award_image['alt']; ?>" />
									
									<?php } ?>
						
								</div><!-- about_slide_img_wrapper -->
					
							</div><!-- about_slide_inner -->
					
						</div><!-- about_single_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
												
			</div><!-- about_slider -->
			
		</div><!-- about_slider_inner -->
		
	</div><!-- about_awards_inner -->
	
	<div class="about_wave_bottom">
		
		<img class="wave bottom" src="<?php bloginfo('template_directory');?>/images/about-awards-bg-bottom.svg"/>
		
	</div><!-- about_wave_bottom -->

</div><!-- about_awards -->

<div class="about_bottom">
	
	<div class="about_bottom_inner">
	
	<div class="about_bottom_left">
		
		<div class="about_bottom_image">
			
				<?php $about_bottom_image = get_field( 'about_bottom_image' ); ?>
				
				<?php if ( $about_bottom_image ) { ?>
				
					<img src="<?php echo $about_bottom_image['url']; ?>" alt="<?php echo $about_bottom_image['alt']; ?>" />
				
				<?php } ?>
			
			</div><!-- about_bottom_image -->

			<div class="about_bottom_quote_wrapper">
				
				<div class="about_bottom_quote">
					
					<span><?php the_field( 'about_bottom_quote' ); ?></span>
					
				</div><!-- about_bottom_quote -->
				
			</div><!-- about_bottom_quote_wrapper -->
		
	</div><!-- about_bottom_left -->
	
	<div class="about_bottom_right content">
		
		<?php the_field( 'about_bottom_content' ); ?>
		
	</div><!-- about_bottom_right -->
	
	</div><!-- about_bottom_inner -->
	
</div><!-- about_bottom -->


</div><!-- internal_main -->
		

<?php get_footer(); ?>
