<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href="https://fonts.googleapis.com/css?family=Barlow:400,500,600,700,900,900i&display=swap" rel="stylesheet">

<style>


<?php the_field( 'review_css','option'); ?>



</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="header_inner">
		
			<div class="header_left">
				
				<a class="logo" href="<?php bloginfo('url');?>">
					
					<?php echo file_get_contents("wp-content/themes/harris/images/logo.svg"); ?>
					
				</a>
				
			</div><!-- header_left -->
			
			<div class="header_right">
				
				<div class="tagline_wrapper">
					
					<?php if(get_field('tagline','option')): ?>
					
						<ul class="tagline">
					 
						<?php while(has_sub_field('tagline', 'option')): ?>
					 
							<li><?php the_sub_field( 'list_item' ); ?></li>
					    
						<?php endwhile; ?>
						
						</ul>
					 
					<?php endif; ?>					
					
					<a class="phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_phone', 'option')); ?>"><?php the_field( 'firm_phone','option'); ?></a>
					
				</div><!-- tagline_wrapper -->
				
				<nav class="nav_desktop"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?></nav>
				
				<div class="menu_wrapper">
					
					<div class="menu_inner">
					
						<span class="menu_bar"></span>
						<span class="menu_bar"></span>
						<span class="menu_bar"></span>
					
					</div><!-- menu_inner -->
					
				</div><!-- menu_wrapper -->
				
			</div><!-- header_right -->
		
		</div><!-- header_inner -->
		
	</header>
				


			