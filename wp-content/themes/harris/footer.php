<footer id="footer_trigger">
	
	<div class="footer_wave_top">
		
		<img class="footer_wave" src="<?php bloginfo('template_directory');?>/images/footer-bg-top.svg"/>
		
	</div><!-- footer_wave_top -->
	
	<div class="footer_bg">
		
		<div class="footer_inner">
			
			<?php if(!is_page_template('page-templates/template-contact.php')) { ?>
			
			<div class="footer_left">
				
				<span class="contact_us_title"><?php the_field( 'footer_contact_title','option'); ?></span><!-- contact_us_title -->
				
				<div class="footer_contact_wrapper">
					
					<div class="footer_contact_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-phone-01.svg"/>
						
						<a class="contact_content" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><?php the_field( 'firm_phone','option'); ?></a>
						
					</div><!-- footer_contact_row -->
					
					<div class="footer_contact_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-address-01.svg"/>
						
						<span class="contact_content address">
							<?php the_field( 'firm_street_address','option'); ?>
							<a class="map_button" href="<?php the_field( 'firm_directions_link','option'); ?>" target="_blank" rel="noopener">Map</a>
						</span>
						
					</div><!-- footer_contact_row -->
					
					<div class="footer_contact_row">
						
						<img src="<?php bloginfo('template_directory');?>/images/footer-hours-01.svg"/>
						
						<div class="hours_wrapper">
							
							<?php if(get_field('firm_hours','option')): ?>
							 
								<?php while(has_sub_field('firm_hours','option')): ?>
							 
									<span class="contact_content"><?php the_sub_field( 'days' ); ?></span><!-- contact_content -->
									<span class="contact_content"><?php the_sub_field( 'hours' ); ?></span><!-- contact_content -->
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
						
						</div><!-- hours_wrapper -->
						
					</div><!-- footer_contact_row -->
					
				</div><!-- footer_contact_wrapper -->
				
				<div class="sm_loc_wrapper">
				
				<div class="social_media">
					
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
					
				</div><!-- social_media -->
				
				<div class="location_tagline">
					
					<span><?php the_field( 'footer_tagline','option'); ?></span>
					
				</div><!-- location_tagline -->
				
				</div><!-- sm_loc_wrapper -->
				
			</div><!-- footer_left -->
			
			
			<?php } ?>
			
			<div class="footer_right">
				
				<span class="footer_right_subheader"><?php the_field( 'footer_form_subheader','option'); ?></span><!-- footer_right_subheader -->
				
				<span class="footer_right_large_header"><?php the_field( 'footer_form_header','option'); ?></span>
				
<!-- 				<span class="footer_right_large_header">request<br class="mobile"/> your<br class="desktop"/> free consultation</span> -->
				
				<div id="consultation" class="form_wrapper">
					
					<?php gravity_form(1, false, false, false, '', true, 12); ?>
					
					<span class="required_fields">Required Fields<span class="ast">*</span></span>
					
				</div><!-- form_wrapper -->
				
			</div><!-- footer_right -->
			
		</div><!-- footer_inner -->
		
		<div class="copyright_wrapper">
			
			<div class="copyright_inner">
				
				<ul>
					<li>&copy; <?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></li>
					
					<?php if(get_field('terms_and_conditions','options')) { ?>
					
						<li><a href="<?php the_field( 'terms_and_conditions','option'); ?>">Terms & Conditions</a></li>
						
					<?php } ?>
					
					<?php if(get_field('privacy_policy','options')) { ?>
					
						<li><a href="<?php the_field( 'privacy_policy','option'); ?>">Privacy Policy</a></li>
					
					<?php } ?>
					
				</ul>
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
					
					<img src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/>
					
				</a>
				
			</div><!-- copyright_inner -->
			
		</div><!-- copyright_wrapper -->
		
	</div><!-- footer_bg -->
	
</footer>


<?php wp_footer();?>


</body>
</html>
