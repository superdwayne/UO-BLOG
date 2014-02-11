 <?php
/*
Template Name: Urban Outfitters (Show all posts)

*/
?>
<?php get_header(); ?>

<div class="home-post-left , fr" > <!-- Tid bits -->

	<?php query_posts('category_name=Tidbits&posts_per_page=10'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
	 		<div class="post-excerpt">
											
				<h2><?php echo get_the_title(); ?></h2>  
				
				<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span> </a>
	
			</div>
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div> <!-- end of home-post-left -->	

<div class="home-post-middle , fr ">

	<?php query_posts('category_name=whats-happening&posts_per_page=10'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 
	 		<div class="post-excerpt">
											
				<h2><?php echo get_the_title(); ?></h2>
				 
				<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span> </a>
	
			</div>
			
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div> <!-- End of home-post-middle -->	


<div class="home-post-right">

	<?php query_posts('category_name=news&posts_per_page=10'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	 		
	 		<div class="post-excerpt">
											
				<h2><?php echo get_the_title(); ?></h2>
				 
				<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span> </a>
			</div>
		
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div>

<!-- Mobile -->

<div class="home-post-left-mobile" > <!-- Tid bits mobile -->

	<?php query_posts('category_name=Tidbits&posts_per_page=6'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
	 		<div class="post-excerpt" id="post-<?php the_ID(); ?> ">
											
				<h2><?php echo get_the_title(); ?></h2>  
				
				<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span> </a>
	
			</div>
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div> <!-- end of home-post-left -->	



<div class="home-post-right-mobile">

	<?php query_posts('category_name=news&posts_per_page=6'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			 		
	 		<div class="post-excerpt" id="post-<?php the_ID(); ?> ">
											
				<h2><?php echo get_the_title(); ?></h2>					
				
				<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span> </a>
			</div>
		
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div>


<div class="home-post-middle-mobile ">

	<?php query_posts('category_name=whats-happening&posts_per_page=6 '); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 
	 		<div class="post-excerpt" id="post-<?php the_ID(); ?> ">
											
				<h2><?php echo get_the_title(); ?></h2>
				
				<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span> </a>
	
			</div>
			
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div> <!-- End of home-post-middle-mobile -->	

	
<?php get_footer(); ?>	