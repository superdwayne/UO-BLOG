 <?php
/*
Template Name: Comments page

*/
?>
ss
<div id="comments">
	<?php if ( post_password_required() ) : ?>
					<p class="nopassword">comments protected</p>
				</div><!-- #comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
		
		if ( have_comments() ) : ?>
			
			<ol class="commentlist">
			
				<a href="#comment" class="write-yours"><img src="http://blog.urbanoutfitters.co.uk/wp-content/themes/platform/images/write-yours.jpg" alt="Write your's" /></a>
			
				<h2>Comments</h2>
				<?php wp_list_comments(array('avatar_size' => 45)); ?> 
			
			</ol>
			
			<a name="comment"> </a>
			
			
			
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
						<div class="navigation">
							<div class="alignleft"><?php previous_comments_link( __( '<span class="meta-nav">&larr;</span> Older Comments', 'pagelines' ) ); ?></div>
							<div class="alignright"><?php next_comments_link( __( 'Newer Comments <span class="meta-nav">&rarr;</span>', 'pagelines' ) ); ?></div>
						</div> <!-- .navigation -->
			<?php endif; // check for comment navigation ?>

			
<?php 	else : // or, if we don't have comments:

			/* If there are no comments and comments are closed,
			 * let's leave a little note, shall we?
			 */
			if ( ! comments_open() ) :
		?>
			<p class="nocomments"><?php _e('Comments are closed.', 'pagelines');?></p>
		<?php endif; // end ! comments_open() ?>

<?php 
		endif; // end have_comments() 
	 
	comment_form(); ?>
</div>
