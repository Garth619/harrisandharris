<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_main">
	
	<div class="bio_wave_wrapper">
	
		<img class="bio_internal_wave" src="<?php bloginfo('template_directory');?>/images/bio-temp.jpg"/>
	
		<div class="bio_content">
	
		<div class="bio_left">
			
			<div class="bio_img_wrapper">
				
				<?php $attorney_profile_image = get_field( 'attorney_profile_image' ); ?>
				
				<?php if ( $attorney_profile_image ) : ?>
				
					<img src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
					
					<?php else: ?>
					
					<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="Picture Coming Soon"/>
				
				<?php endif; ?>
				
			</div><!-- bio_img_wrapper -->
			
		</div><!-- bio_left -->
		
		<div class="bio_right">
			
			<h1 class="bio_header"><?php the_title();?></h1>
			
			<span class="bio_position"><?php the_field( 'attorney_position' ); ?></span><!-- bio_position -->
			
			<span class="bio_description"><?php the_field( 'attorney_description' ); ?></span><!-- bio_description -->
			
		</div><!-- bio_right -->
	
	</div><!-- bio_content -->
	
	</div><!-- bio_wave_wrapper -->
	
	<div class="bio_bottom_content">
		
		<div class="bio_bottom_left">
			
			<?php if(get_field('education_list')) : ?>
			
			<div class="sidebar_box">
				
				<h3><?php the_field( 'education_sidebar_title' ); ?></h3>
				
				<div class="education_list">
					
					<ul class="bio_list">
					 
						<?php while(has_sub_field('education_list')): ?>
					 
							<li><span><?php the_sub_field( 'single_list_item' ); ?></span>
							
								<?php if(get_sub_field('sub_list_items')): ?>
								
									<ul>
								 
									<?php while(has_sub_field('sub_list_items')): ?>
								 
										<li><?php the_sub_field( 'sub_list_item' ); ?></li>
								    
									<?php endwhile; ?>
									
									</ul>
								 
								<?php endif; ?>
							
							</li>
					    
						<?php endwhile; ?>
						
						</ul>
					 
				</div><!-- education_list -->
				
			</div><!-- sidebar_box -->
			
			<?php endif; ?>
				
			<?php if(get_field('bar_admissions_list')): ?>
			
			<div class="sidebar_box">
				
				<h3><?php the_field( 'bar_admissions_sidebar_title' ); ?></h3>
				
				<div class="bar_list">
					
						<ul class="bio_list">
					 
						<?php while(has_sub_field('bar_admissions_list')): ?>
					 
							<li><?php the_sub_field( 'single_list_item' ); ?></li>
					    
						<?php endwhile; ?>
						
						</ul>
					
				</div><!-- bar_list -->
				
			</div><!-- sidebar_box -->
			
			<?php endif; ?>
			
		</div><!-- bio_bottom_left -->
		
		<div class="bio_bottom_right content">
			
			<?php the_field( 'attorney_content' ); ?>
						
		</div><!-- bio_bottom_right -->
		
	</div><!-- bio_bottom_content -->
	
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
