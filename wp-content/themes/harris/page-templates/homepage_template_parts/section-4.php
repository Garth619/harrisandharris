<section id="section_four">
	
	<div class="sec_four_wave_top">
		
		<img class="wave top" data-src="<?php bloginfo('template_directory');?>/images/cr-bg-top.svg"/>
		
	</div><!-- sec_four_wave_top -->
	
	<div class="sec_four_bg">
		
		<div class="sec_four_inner">
			
			<span class="sec_four_title"><?php the_field( 'section_four_title' ); ?></span><!-- sec_four_title -->
			
			<a class="view_cr top" href="<?php the_field( 'view_all_results_link' ); ?>">View All Results</a><!-- view_cr -->
			
			<div class="sec_four_cr_wrapper">
				
				<?php if(get_field('section_four_case_results')): ?>
				 
					<?php while(has_sub_field('section_four_case_results')): ?>
				 
						<div class="sec_four_cr">
					
							<div class="sec_four_reg">
						
								<?php if(get_sub_field('svg_icon') == 'Car') { ?>
			
									<img class="cr_svg" data-src="<?php bloginfo('template_directory');?>/images/cr-01-01.svg"/>
					
								<?php } ?>
					
								<?php if(get_sub_field('svg_icon') == 'Truck') { ?>
						
									<img class="cr_svg" data-src="<?php bloginfo('template_directory');?>/images/cr-02-01.svg"/>
								
								<?php } ?>
								
								<?php if(get_sub_field('svg_icon') == 'Taxi') { ?>
						
									<img class="cr_svg" data-src="<?php bloginfo('template_directory');?>/images/cr-03-01.svg"/>
								
								<?php } ?>
								
								<?php if(get_sub_field('svg_icon') == 'Horse') { ?>
						
									<img class="cr_svg" data-src="<?php bloginfo('template_directory');?>/images/cr-04-01.svg"/>
								
								<?php } ?>
								
								<?php if(get_sub_field('svg_icon') == 'Motorcycle') { ?>
						
									<img class="cr_svg" data-src="<?php bloginfo('template_directory');?>/images/cr-05-01.svg"/>
								
								<?php } ?>
								
								<?php if(get_sub_field('svg_icon') == 'Cash') { ?>
						
									<img class="cr_svg" data-src="<?php bloginfo('template_directory');?>/images/cr-money-01.svg"/>
								
								<?php } ?>
						
								<span class="amount"><?php the_sub_field( 'amount' ); ?></span>
						
								<span class="type"><?php the_sub_field( 'type' ); ?></span><!-- type -->
						
							</div><!-- sec_four_reg -->
					
							<div class="sec_four_hov">
							
								<span class="large_header"><?php the_sub_field( 'hover_title' ); ?></span><!-- large_header -->
							
								<span class="description"><?php the_sub_field( 'hover_description' ); ?></span>
							
							</div><!-- sec_four_hov -->
					
					</div><!-- sec_four_cr -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
								
			</div><!-- sec_four_cr_wrapper -->
			
			<a class="view_cr bottom" href="">View All Results</a><!-- view_cr -->
			
		</div><!-- sec_four_inner -->
		
	</div><!-- sec_four_bg -->
	
	<div class="sec_four_wave_bottom">
		
		<img class="wave bottom"  data-src="<?php bloginfo('template_directory');?>/images/cr-bg-bottom.svg"/>
		
	</div><!-- sec_four_wave_bottom -->
	
</section><!-- section_four -->