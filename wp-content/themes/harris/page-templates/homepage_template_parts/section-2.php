<section id="section_two">
	
	<div class="sec_two_inner">
		
		<div class="sec_two_arrow sec_two_arrow_left">
			
			<?php echo file_get_contents("wp-content/themes/harris/images/icon-arrow-02-01.svg"); ?>
			
		</div><!-- sec_two_arrow -->
		
		<div class="sec_two_slider">
			
			<?php if(get_field('section_two_slider')): ?>
			 
				<?php while(has_sub_field('section_two_slider')): ?>
			 
					<div class="sec_two_slide">
				
						<div class="svg_wrapper">
							
							<?php if(get_sub_field('svg_icon') == "Justice Scale") { ?>
					
								<img src="<?php bloginfo('template_directory');?>/images/sp-01-01.svg"/>
							
							<?php } ?>
							
							<?php if(get_sub_field('svg_icon') == "Bullseye") { ?>
					
								<img src="<?php bloginfo('template_directory');?>/images/sp-02-01.svg"/>
							
							<?php } ?>
							
							<?php if(get_sub_field('svg_icon') == "Ribbon") { ?>
					
								<img src="<?php bloginfo('template_directory');?>/images/sp-03-01.svg"/>
							
							<?php } ?>
							
							<?php if(get_sub_field('svg_icon') == "Handshake") { ?>
					
								<img src="<?php bloginfo('template_directory');?>/images/sp-04-01.svg"/>
							
							<?php } ?>
					
						</div><!-- svg_wrapper -->
				
						<span class="sec_two_slide_title"><?php the_sub_field( 'title' ); ?></span><!-- sec_two_slide_title -->
				
						<span class="sec_two_slide_description"><?php the_sub_field( 'description' ); ?></span><!-- sec_two_slide_description -->
				
					</div><!-- sec_two_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- sec_two_slider -->
		
		<div class="sec_two_arrow sec_two_arrow_right">
			
			<?php echo file_get_contents("wp-content/themes/harris/images/icon-arrow-02-01.svg"); ?>
			
		</div><!-- sec_two_arrow -->
		
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->