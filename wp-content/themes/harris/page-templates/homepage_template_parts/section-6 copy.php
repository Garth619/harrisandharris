<section id="section_six">
	
	<div class="sec_six_wave_top">
		
		<img class="wave top" data-src="<?php bloginfo('template_directory');?>/images/test-bg-top.svg"/>
		
	</div><!-- sec_six_wave_top -->
	
	<div class="sec_six_bg">
		
		<div class="sec_six_inner">
			
			<span class="sec_six_title"><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_title -->
			
			<a class="view_cr top" href="<?php the_field( 'view_all_results_page_link_cr' ); ?>">View All Results</a><!-- view_cr -->
			
			<div class="sec_six_test_wrapper">
				
				<?php if(get_field('section_six_client_reviews')): ?>
				 
					<?php while(has_sub_field('section_six_client_reviews')): ?>
				 
						<div class="sec_six_test">
					
							<img data-src="<?php bloginfo('template_directory');?>/images/test-stars.svg"/>
					
							<span class="test_large_quote"><?php the_sub_field( 'title' ); ?></span><!-- test_large_quote -->
					
							<div class="testi_description">
						
								<?php the_sub_field( 'description' ); ?>
						
						</div><!-- testi_description -->
					
						<span class="name"><?php the_sub_field( 'name' ); ?></span>
					
					</div><!-- sec_six_test -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
								
			</div><!-- sec_six_test_wrapper -->
			
			<a class="view_cr bottom" href="<?php the_field( 'view_all_results_page_link_cr' ); ?>">View All Results</a><!-- view_cr -->
			
		</div><!-- sec_six_inner -->
	
	</div><!-- sec_six_bg -->
	
	<div class="sec_six_wave_bottom">
		
		<img class="wave bottom"  data-src="<?php bloginfo('template_directory');?>/images/test-bg-bottom.svg"/>
		
	</div><!-- sec_six_wave_bottom -->
	
	
</section><!-- section_six -->