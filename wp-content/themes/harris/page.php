<?php get_header(); ?>

<div id="internal_main">

<div class="internal_banner">
	
	<div class="internal_banner_content">
		
		<div class="banner_left">
			
			<span class="banner_subheader"><?php the_field( 'internal_sub_banner_title_global','option'); ?></span><!-- banner_subheader -->
		
			<span class="banner_largeheader"><?php the_field( 'internal_banner_title_global_copy','option'); ?></span><!-- banner_largeheader -->
		
			<a class="banner_button" href="#consultation">Get Your Free Consultation</a><!-- banner_button -->

		</div><!-- banner_left -->
		
		<div class="banner_right">
			
			<img class="att_one" src="<?php bloginfo('template_directory');?>/images/hero-att-01.png"/><!-- att_one -->
			
			<img class="att_two" src="<?php bloginfo('template_directory');?>/images/hero-att-02.png"/><!-- att_two -->

		</div><!-- banner_right -->
		
	</div><!-- internal_banner_content -->
	
	
	<picture class="all_browsers_internal">

		<source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-bg-mobile.svg">
		
		<source media="(max-width: 1010px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-bg-tablet.svg">
		
		<source media="(max-width: 1330px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-bg-laptop.svg">
	
		<img class="internal_banner_img" src="<?php bloginfo('template_directory');?>/images/int-hero-bg-desktop.svg"/>

	</picture>
	
	<picture class="ie_hack_internal">

		<source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-flat-bg-mobile.svg">
		
		<source media="(max-width: 1010px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-flat-bg-tablet.svg">
		
		<source media="(max-width: 1330px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-flat-bg-laptop.svg">
	
		<img class="internal_banner_img" src="<?php bloginfo('template_directory');?>/images/int-hero-flat-bg-desktop.svg"/>

	</picture>
	
	<picture>
	
		<source media="(max-width: 767px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-top-white-mobile.svg">
	
		<source media="(max-width: 1010px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-top-white-tablet.svg">
	
		<source media="(max-width: 1330px)" srcset="<?php bloginfo('template_directory');?>/images/int-hero-top-white-laptop.svg">
	
		<img class="internal_banner_white" src="<?php bloginfo('template_directory');?>/images/int-hero-top-white-desktop.svg"/>
	
	</picture>

	
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
