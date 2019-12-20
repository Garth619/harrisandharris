<footer id="footer_trigger">
	
	<div class="footer_wave_top">
		
		<img class="footer_wave" src="<?php bloginfo('template_directory');?>/images/footer-bg-top.svg"/>
		
	</div><!-- footer_wave_top -->
	
	<div class="footer_bg">
		
		<div class="footer_inner">
			
			<div class="footer_left">
				
				<span class="contact_us_title">Contact Us</span><!-- contact_us_title -->
				
				<div class="footer_contact_wrapper">
					
					<div class="footer_contact_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-phone-01.svg"/>
						
						<a class="contact_content" href="">(702) 384-1414</a>
						
					</div><!-- footer_contact_row -->
					
					<div class="footer_contact_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-address-01.svg"/>
						
						<span class="contact_content">
							1645 Village Center Circle, Suite 60<br/> Las Vegas, NV 89134
							<a class="map_button" href="">Map</a>
						</span>
						
					</div><!-- footer_contact_row -->
					
					<div class="footer_contact_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-hours-01.svg"/>
						
						<div class="hours_wrapper">
						
							<span class="contact_content">Monday - Friday</span><!-- contact_content -->
							<span class="contact_content">8:00 am - 5:00 pm</span><!-- contact_content -->
						
						</div><!-- hours_wrapper -->
						
					</div><!-- footer_contact_row -->
					
				</div><!-- footer_contact_wrapper -->
				
				<div class="social_media">
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-fb.svg"); ?>
						
					</a>
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-insta.svg"); ?>
						
					</a>
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-fb.svg"); ?>
						
					</a>
					
					<a class="" href="">
						
						<?php echo file_get_contents("wp-content/themes/harris/images/social-fb.svg"); ?>
						
					</a>
					
				</div><!-- social_media -->
				
			</div><!-- footer_left -->
			
			<div class="footer_right"></div><!-- footer_right -->
			
		</div><!-- footer_inner -->
		
	</div><!-- footer_bg -->
	
	<?php // gravity_form(1, false, false, false, '', true, 12); ?>
		
</footer>


<?php wp_footer();?>


</body>
</html>
