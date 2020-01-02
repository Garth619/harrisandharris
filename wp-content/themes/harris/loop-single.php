<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="single_blog_post">
		
		<div class="meta_data">
		
			<span class="date">Posted on <?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
				
			<?php echo get_the_category_list();?>
		
		</div><!-- meta_data -->
			
		<div class="blog_content">
			
			<?php the_content();?>
			
		</div><!-- blog_content -->
				
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>

	</div><!-- single_blog_post -->


<?php endwhile; // end of loop ?>

<?php endif; ?>