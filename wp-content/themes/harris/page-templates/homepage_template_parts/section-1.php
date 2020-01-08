<section id="section_one">
	
<div class="sec_one_content">
	
	<div class="sec_one_left">
		
		<span class="sec_one_subheader"><?php the_field( 'section_one_subheader' ); ?></span><!-- sec_one_subheader -->
		
		<span class="sec_one_header"><?php the_field( 'section_one_header' ); ?></span><!-- sec_one_header -->
		
		<a class="consultation_button" href="#consultation">
			
			<span><?php the_field( 'free_consultation_verbiage' ); ?></span>
		
		</a><!-- consultation_button -->
		
	</div><!-- sec_one_left -->
	
	<div class="sec_one_right">
		
		<?php $section_one_attorney_image_one = get_field( 'section_one_attorney_image_one' ); ?>
		
		<?php if ( $section_one_attorney_image_one ) { ?>
			
			<img class="att_one" src="<?php echo $section_one_attorney_image_one['url']; ?>" alt="<?php echo $section_one_attorney_image_one['alt']; ?>" />
		
		<?php } ?>
		
		<?php $section_one_attorney_image_two = get_field( 'section_one_attorney_image_two' ); ?>
		
		<?php if ( $section_one_attorney_image_two ) { ?>
			
			<img class="att_two" src="<?php echo $section_one_attorney_image_two['url']; ?>" alt="<?php echo $section_one_attorney_image_two['alt']; ?>" />
		
		<?php } ?>
		
	</div><!-- sec_one_right -->

</div><!-- sec_one_content -->

<picture class="ie_hack">

	<source media="(max-width: 700px)" srcset="<?php bloginfo('template_directory');?>/images/hero-bg-flat-mobile-01.svg">
	<source media="(max-width: 1010px)" srcset="<?php bloginfo('template_directory');?>/images/hero-bg-flat-tablet-02.svg">
	<source media="(max-width: 1355px)" srcset="<?php bloginfo('template_directory');?>/images/hero-bg-flat-laptop-02.svg">
	
	<img class="hero_img" src="<?php bloginfo('template_directory');?>/images/hero-bg-flat-desktop-02.svg"/>

</picture>

<picture class="all_browsers">

	<source media="(max-width: 700px)" srcset="<?php bloginfo('template_directory');?>/images/hero-bg-mobile-02.svg">
	<source media="(max-width: 1010px)" srcset="<?php bloginfo('template_directory');?>/images/hero-bg-tablet-02.svg">
	<source media="(max-width: 1355px)" srcset="<?php bloginfo('template_directory');?>/images/hero-bg-laptop-02.svg">
	
	<img class="hero_img" src="<?php bloginfo('template_directory');?>/images/hero-bg-desktop-02.svg"/>

</picture>


<picture>
	
	<source media="(max-width: 700px)" srcset="<?php bloginfo('template_directory');?>/images/hero-top-white-mobile.svg">
	<source media="(max-width: 1010px)" srcset="<?php bloginfo('template_directory');?>/images/hero-top-white-tablet.svg">
	<source media="(max-width: 1355px)" srcset="<?php bloginfo('template_directory');?>/images/hero-top-white-laptop.svg">
		
	<img class="hero_white" src="<?php bloginfo('template_directory');?>/images/hero-top-white-desktop.svg"/>

</picture>

</section><!-- section_one -->



