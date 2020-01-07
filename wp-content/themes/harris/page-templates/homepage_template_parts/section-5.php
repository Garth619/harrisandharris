<section id="section_five">
	
	<div class="sec_five_inner content">
		
		<div class="sec_five_left">
			
			<div class="sec_five_img">
				
				<?php $section_five_image = get_field( 'section_five_image' ); ?>
				
				<?php if ( $section_five_image ) { ?>
					
					<img data-src="<?php echo $section_five_image['url']; ?>" alt="<?php echo $section_five_image['alt']; ?>" />
				
				<?php } ?>
				
			</div><!-- sec_five_img -->
			
			<div class="sec_five_quote_wrapper">
				
				<div class="sec_five_quote">
					
					<span><?php the_field( 'section_five_quote' ); ?></span>
					
				</div><!-- sec_five_quote -->
				
			</div><!-- sec_five_quote_wrapper -->
			
		</div><!-- sec_five_left -->
		
			<div class="sec_five_right">
				
				<span class="sec_five_header"><?php the_field( 'section_five_header' ); ?></span><!-- sec_five_header -->
				
				<?php the_field( 'section_five_content' ); ?>
				
			</div><!-- sec_five_right -->
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->