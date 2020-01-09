<section id="section_seven">
	
	<div class="sec_seven_inner">
		
		<span class="sec_seven_title"><?php the_field( 'section_seven_title' ); ?></span><!-- sec_seven_title -->
		
		<div class="sec_seven_content">
			
			<div class="sec_seven_left">
				
				<div class="sec_seven_pa">
					
					<div class="sec_seven_col">
						
						<?php if(get_field('section_seven_pa_list_column_one')): ?>
							
							<ul>
						 
							<?php while(has_sub_field('section_seven_pa_list_column_one')): ?>
						 
								<li><a href="<?php the_sub_field( 'pa_page_link' ); ?>"><?php the_sub_field( 'pa_title' ); ?></a></li>
						    
							<?php endwhile; ?>
							
							</ul>
						 
						<?php endif; ?>
						
					</div><!-- sec_seven_col -->
					
					<div class="sec_seven_col">
							
						<?php if(get_field('section_seven_pa_list_column_two')): ?>
							
							<ul>
						 
							<?php while(has_sub_field('section_seven_pa_list_column_two')): ?>
						 
								<li><a href="<?php the_sub_field( 'pa_page_link' ); ?>"><?php the_sub_field( 'pa_title' ); ?></a></li>
						    
							<?php endwhile; ?>
							
							</ul>
						 
						<?php endif; ?>

							
					</div><!-- sec_seven_col -->
					
				</div><!-- sec_seven_pa -->
				
				<a class="view_pa" href="<?php the_field( 'view_all_practice_areas_page_link' ); ?>">View All Practice Areas</a><!-- view_pa -->
				
			</div><!-- sec_seven_left -->
			
			<div id="sec_seven_ani" class="sec_seven_right">
				
				<div class="sec_seven_img">
					
					<?php $section_seven_image = get_field( 'section_seven_image' ); ?>
					
					<?php if ( $section_seven_image ) { ?>
					
						<img data-src="<?php echo $section_seven_image['url']; ?>" alt="<?php echo $section_seven_image['alt']; ?>" />
					
					<?php } ?>
					
				</div><!-- sec_seven_img -->
				
				<div class="sec_seven_quote_wrapper">
				
					<div class="sec_seven_quote">
					
					<span><?php the_field( 'section_seven_quote' ); ?></span>
					
					</div><!-- sec_seven_quote -->
				
			</div><!-- sec_seven_quote_wrapper -->
				
			</div><!-- sec_seven_right -->
			
		</div><!-- sec_seven_content -->
		
	</div><!-- sec_seven_inner -->
	
</section><!-- section_seven -->