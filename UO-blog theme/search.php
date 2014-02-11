 <?php
/*
Template Name: Search

*/
?>

<?php get_header(); ?>

	<div id="search">

		<p>You searched for: <?php the_search_query();  ?> <br /><br /> Here's what we've found.</p>
		
		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

				<div class="post-excerpt-post">
										
				 <h2><?php echo get_the_title(); ?></h2>  
				
				
				 <a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span>  </a> 
	

				<?php
					global $query_string;
					
					$query_args = explode("&", $query_string);
					$search_query = array();
					
					foreach($query_args as $key => $string) {
					$query_split = explode("=", $string);
					$search_query[$query_split[0]] = urldecode($query_split[1]);
					} // foreach
					
					$search = new WP_Query($search_query);
					?>
				
			</div>

		<?php endwhile; ?>


	<?php else : ?>

	<div class="search-top">
		<h2 class="center">Nothing I'm afraid.</h2>
		<p class="center">We're sorry we couldn't find your search for <?php the_search_query();  ?>. Have another go or check out our <a href="<?php bloginfo('url'); ?>">home</a> page.</p>
		
		 <?php get_search_form(); ?>
		
	</div>	

	<?php endif; ?>
	
<?php get_footer(); ?>	