<?php get_header(); ?>

<div id="internal_main">

<div class="internal_banner">
	
	<div class="internal_banner_content">
		
		<div class="banner_left">
			
			<span class="banner_subheader">$100+ Million Recovered for Our Clients</span><!-- banner_subheader -->
		
			<span class="banner_largeheader">Las Vegas personal injury attorneys</span><!-- banner_largeheader -->
		
			<a class="banner_button" href="#consultation">Get Your Free Consultation</a><!-- banner_button -->

		</div><!-- banner_left -->
		
		<div class="banner_right">
			
			<img class="att_one" src="<?php bloginfo('template_directory');?>/images/hero-att-01.png"/><!-- att_one -->
			
			<img class="att_two" src="<?php bloginfo('template_directory');?>/images/hero-att-02.png"/><!-- att_two -->

		</div><!-- banner_right -->
		
	</div><!-- internal_banner_content -->
	
	<img class="internal_banner_img" src="<?php bloginfo('template_directory');?>/images/int-hero-bg.png"/><!-- internal_banner_img -->
	
</div><!-- internal_banner -->

<div class="default_container two_col">
	
	<div class="content_left content">
		
		<h1 class="default_header"><?php the_title();?></h1><!-- default_header -->
		
		<?php get_template_part( 'loop', 'page' ); ?>
				
	</div><!-- content_left -->
	
		<?php get_sidebar(); ?>
	
</div><!-- default_container -->


</div><!-- internal_main -->
		


<?php get_footer(); ?>
