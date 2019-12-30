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
						
						<a class="contact_page_content" href="">(702) 384-1414</a>
						
					</div><!-- contact_page_row -->
					
					<div class="contact_page_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-address-01.svg"/>
						
						<span class="contact_page_content contact_address">
							1645 Village Center Circle, Suite 60<br/> Las Vegas, NV 89134
							<a class="map_button_contact_page" href="">Map</a>
						</span>
						
					</div><!-- contact_page_row -->
					
					<div class="contact_page_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-hours-01.svg"/>
						
						<div class="contact_page_hours_wrapper">
						
							<span class="contact_page_content">Monday - Friday</span><!-- contact_page_content -->
							<span class="contact_page_content">8:00 am - 5:00 pm</span><!-- contact_page_content -->
						
						</div><!-- contact_page_hours_wrapper -->
						
					</div><!-- contact_page_row -->
					
				</div><!-- contact_page_wrapper -->
				
				<div class="sm_loc_wrapper">
				
				<div class="social_media">
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-fb.svg"); ?>
						
					</a>
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-twitter.svg"); ?>
						
					</a>
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-linked.svg"); ?>
						
					</a>
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-insta.svg"); ?>
						
					</a>
					
				</div><!-- social_media -->
				
				<div class="location_tagline">
					
					<span>Fighting for the injured<br/> in Nevada, Utah and Arizona.</span>
					
				</div><!-- location_tagline -->
				
				</div><!-- sm_loc_wrapper -->
			
		</div><!-- contact_left -->
		
		<div class="contact_right"></div><!-- contact_right -->
		
	</div><!-- contact_wrapper -->
	
</div><!-- internal_container -->


</div><!-- internal_main -->
		


			
<?php get_footer(); ?>