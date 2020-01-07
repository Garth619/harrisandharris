<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">

<div class="internal_container">
	
	<div class="contact_wrapper">
		
		<div class="contact_left">
			
			<h1 class="internal_header"><?php the_title();?></h1><!-- default_header -->
			
			<div class="contact_page_wrapper">
					
					<div class="contact_page_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-phone-01.svg"/>
						
						<a class="contact_page_content" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><?php the_field( 'firm_phone','option'); ?></a>
						
					</div><!-- contact_page_row -->
					
					<div class="contact_page_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-address-01.svg"/>
						
						<span class="contact_page_content contact_address">
							<?php the_field( 'firm_street_address','option'); ?>
							<a class="map_button_contact_page" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank" rel="noopener">Map</a>
						</span>
						
					</div><!-- contact_page_row -->
					
					<div class="contact_page_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-hours-01.svg"/>
						
						<div class="contact_page_hours_wrapper">
						
							<?php if(get_field('firm_hours','option')): ?>
							 
								<?php while(has_sub_field('firm_hours','option')): ?>
							 
									<span class="contact_content"><?php the_sub_field( 'days' ); ?></span><!-- contact_content -->
									<span class="contact_content"><?php the_sub_field( 'hours' ); ?></span><!-- contact_content -->
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
						
						</div><!-- contact_page_hours_wrapper -->
						
					</div><!-- contact_page_row -->
					
				</div><!-- contact_page_wrapper -->
				
				<div class="sm_loc_wrapper_contact_page">
				
				<div class="social_media_contact_page">
					
					<?php if(get_field('facebook_link','option')) { ?>
					
						<a class="" href="<?php the_field( 'facebook_link','option'); ?>" target="_blank" rel="noopener">
						
							<?php echo file_get_contents("wp-content/themes/harris/images/social-fb.svg"); ?>
						
						</a>
					
					<?php } ?>
					
					<?php if(get_field('twitter_link','option')) { ?>
					
						<a class="" href="<?php the_field( 'twitter_link','option'); ?>" target="_blank" rel="noopener">
						
							<?php echo file_get_contents("wp-content/themes/harris/images/social-twitter.svg"); ?>
						
						</a>
					
					<?php } ?>
					
					<?php if(get_field('linked_in_link','option')) { ?>
					
						<a class="" href="<?php the_field( 'linked_in_link','option'); ?>" target="_blank" rel="noopener">
						
							<?php echo file_get_contents("wp-content/themes/harris/images/social-linked.svg"); ?>
						
						</a>
					
					<?php } ?>
					
					<?php if(get_field('instagram_link','option')) { ?>
					
						<a class="" href="<?php the_field( 'instagram_link','option'); ?>" target="_blank" rel="noopener">
						
							<?php echo file_get_contents("wp-content/themes/harris/images/social-insta.svg"); ?>
						
						</a>
					
					<?php } ?>
					
				</div><!-- social_media_contact_page -->
				
				<div class="location_tagline_contact_page">
					
					<span><?php the_field( 'footer_tagline','option'); ?></span>
					
				</div><!-- location_tagline_contact_page -->
				
				</div><!-- sm_loc_wrapper_contact_page -->
			
		</div><!-- contact_left -->
		
		<div class="contact_right">
			
			<a href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank" rel="noopener">
				
				<img src="<?php bloginfo('template_directory');?>/images/map.png"/>
				
			</a>
			
		</div><!-- contact_right -->
		
	</div><!-- contact_wrapper -->
	
</div><!-- internal_container -->


</div><!-- internal_main -->
		

<?php get_footer(); ?>