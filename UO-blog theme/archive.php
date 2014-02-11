 <?php
/*
Template Name: Archive page

*/
?>

<?php get_header(); ?>
		
		<div class="archive-month" >
			<h2>Archives by Month:</h2>
			
			<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
			  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
			  <?php wp_get_archives( 'type=monthly&format=option&show_post_count=1' ); ?>
			</select>
		</div>			
		
		
		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

				<div class="post-excerpt-post">
										
			 	<p class="alignmarg"><?php echo get_the_title(); ?></p> 
			 	
			 	<p class="alignmarg"><?php echo get_the_date(); ?></p>
				
				<a class="archive" href="<?php the_permalink() ?>" rel="bookmark"> <?php the_excerpt('<p>Read more...&raquo;</p>'); ?> </span>  </a> 
	
			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	
<?php get_footer(); ?>	