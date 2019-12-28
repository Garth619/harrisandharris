<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main">
	
	<div class="cr_internal_block"></div><!-- cr_internal_block -->
	
	<img class="cr_internal_wave" src="<?php bloginfo('template_directory');?>/images/test-bg-bottom.svg"/>

<div class="internal_container">
	
	<h1 class="internal_header center"><?php the_title();?></h1>
	
	<div class="cr_internal_wrapper">
		
		<?php if(get_field('case_results_internal')): ?>
		 
			<?php while(has_sub_field('case_results_internal')): ?>
		 
				<div class="single_cr_internal">
					
					<?php if(get_sub_field('svg_choice') == 'Car') { ?>
			
						<img class="cr_svg" src="<?php bloginfo('template_directory');?>/images/cr-01-01.svg"/>
					
					<?php } ?>
					
					<?php if(get_sub_field('svg_choice') == 'Truck') { ?>
			
						<img class="cr_svg" src="<?php bloginfo('template_directory');?>/images/cr-02-01.svg"/>
					
					<?php } ?>
					
					<?php if(get_sub_field('svg_choice') == 'Taxi') { ?>
			
						<img class="cr_svg" src="<?php bloginfo('template_directory');?>/images/cr-03-01.svg"/>
					
					<?php } ?>
					
					<?php if(get_sub_field('svg_choice') == 'Horse') { ?>
			
						<img class="cr_svg" src="<?php bloginfo('template_directory');?>/images/cr-04-01.svg"/>
					
					<?php } ?>
					
					<?php if(get_sub_field('svg_choice') == 'Motorcycle') { ?>
			
						<img class="cr_svg" src="<?php bloginfo('template_directory');?>/images/cr-05-01.svg"/>
					
					<?php } ?>
					
					<?php if(get_sub_field('svg_choice') == 'Cash') { ?>
			
						<img class="cr_svg" src="<?php bloginfo('template_directory');?>/images/cr-money-01.svg"/>
					
					<?php } ?>
			
					<span class="amount"><?php the_sub_field( 'amount' ); ?></span>
			
					<span class="type"><?php the_sub_field( 'type' ); ?></span><!-- type -->
			
				<div class="description content">
				
				<?php the_sub_field( 'description' ); ?>
				
			</div><!-- description -->
			
		</div><!-- single_cr_internal -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
				
	</div><!-- cr_internal_wrapper -->
	
</div><!-- internal_container -->


</div><!-- internal_main -->
						
			  


<?php get_footer(); ?>
