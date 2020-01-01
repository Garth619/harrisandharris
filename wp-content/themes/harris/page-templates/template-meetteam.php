<?php 

/* Template Name: Attorney Directory */

get_header(); ?>


<div id="internal_main">
	

<div class="internal_container">
	
	<h1 class="internal_header center"><?php the_title();?></h1>
	
	<div class="meet_team_wrapper">
		
		<?php if(get_field('meet_the_team')): ?>
		
			<div class="meet_team_section">
		 
			<?php while(has_sub_field('meet_the_team')): ?>
		 
				<span class="meet_team_header"><?php the_sub_field( 'title' ); ?></span><!-- meet_team_header -->
				
				<div class="meet_team_inner">
					
					<?php $posts = get_sub_field('attorneys_and_staff');
					
					if( $posts ): ?>
					    
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
									
									<div class="single_att">
				
										<a href="<?php the_permalink();?>">
				
											<div class="single_att_img">
					
												<?php $attorney_profile_image = get_field( 'attorney_profile_image' ); ?>
				
													<?php if ( $attorney_profile_image ) : ?>
				
														<img src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
					
														<?php else: ?>
					
														<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Picture Coming Soon"/>
				
													<?php endif; ?>
						
												<div class="att_overlay"></div><!-- att_overlay -->
					
											</div><!-- single_att_img -->
					
											<span class="single_att_title"><?php the_title();?></span><!-- single_att_title -->
					
											<span class="single_att_position"><?php the_field( 'attorney_position' ); ?></span><!-- single_att_position -->
				
										</a>
				
									</div><!-- single_att -->
									
								 <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
				</div><!-- meet_team_inner -->
		    
			<?php endwhile; ?>
			
			</div><!-- meet_team_section -->
		 
		<?php endif; ?>
		
	</div><!-- meet_team_wrapper -->
	
</div><!-- internal_container -->


</div><!-- internal_main -->

	
<?php get_footer(); ?>
