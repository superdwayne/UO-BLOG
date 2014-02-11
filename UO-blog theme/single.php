<?php get_header(); ?>

<div class="entry_content">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="post-content">
											
				<h1><?php echo get_the_title(); ?></h1>
				
				<span class="alignright"><?php echo get_the_date(); ?></span>
				
				<div class="alignnone-social" id="social-top">
											
				<span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_fblike_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='fblike'></span><span class='st_plusone_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span><span class='st_pinterest_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='pinterest'></span>
				
				</div>
					
					
					<?php the_content(); ?>
						
	
					<div class="side-bar-info">
				
						<span class="post-archive">	
						
							<strong>Archives</strong>
							<?php wp_get_archives('type=monthly&limit=12'); ?>
						</span>
						
						
						<span class="post-cat">
						
							<strong> Categories </strong>
							<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li='); ?> 
						</span>

					

					</div>
			
			</div>
			
		<div class="alignnone-social" id="social-bot">
				
			<span class='st_facebook_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_twitter_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_fblike_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='fblike'></span><span class='st_plusone_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span><span class='st_pinterest_hcount' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='pinterest'></span>
				
			</div>
			
			
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	 									
			<p id="back-top" >
			 	<a href="#top"><span></span></a>
			 </p> 
	
<?php get_footer(); ?>	