<section id="section_three">
	
	<div class="sec_three_inner">
		
		<h1><?php the_field( 'section_three_header' ); ?></h1>
		
		<div class="sec_three_content content">
			
			<div class="sec_three_left">
				
				<?php the_field( 'section_three_content' ); ?>

			</div><!-- sec_three_left -->
			
			<div class="sec_three_right">
				
				<div class="sec_three_img">
				
					<?php $section_three_image = get_field( 'section_three_image' ); ?>
					
					<?php if ( $section_three_image ) { ?>
						
						<img data-src="<?php echo $section_three_image['url']; ?>" alt="<?php echo $section_three_image['alt']; ?>" />
					
					<?php } ?>
				
				</div><!-- sec_three_img -->
				
				<div class="sec_three_quote_wrapper">
					
					<div class="sec_three_quote">
						
						<span><?php the_field( 'section_three_quote' ); ?></span>
						
					</div><!-- sec_three_quote -->
					
				</div><!-- sec_three_quote_wrapper -->
								
			</div><!-- sec_three_right -->
			
		</div><!-- sec_three_content -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->