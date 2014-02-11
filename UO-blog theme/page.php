 <?php
/*
Template Name: All posts

*/
?>
	
<?php get_header(); ?>	
	
		<?php
$args = array( 'numberposts' => 800 );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>

 	<div class="post-excerpt-post" id="post-<?php the_ID(); ?> ">				
		<h2><?php echo get_the_title(); ?></h2>
		 
		<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span> </a>
	</div>
				
<?php endforeach; ?>


<?php get_footer(); ?>		