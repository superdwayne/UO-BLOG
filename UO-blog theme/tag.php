 <?php
/*
Template Name: Tags

*/
?>

<?php get_header(); ?>

<li class="categories"> 
					<span class="archive-month"><h2>You're currently viewing the tag</h2>  <h2><?php single_tag_title(); ?></h2> </span>
	<?php function drop_tags()
{
    echo "<select onChange=\"document.location.href=this.options[this.selectedIndex].value;\">";
    echo "<option>Tags</option>\n";
    foreach (get_the_tags() as $tag)
    {
        echo "<option value=\"";
        echo get_tag_link($tag->term_id);
        echo "\">".$tag->name."</option>\n";
    }
    echo "</select>";
}?>

<script type="text/javascript"><!--
    var dropdown = document.getElementById("cat");
    function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			location.href = "<?php echo get_option('home');
?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
		}
    }
    dropdown.onchange = onCatChange;
--></script>
</li>
		
		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

				<div class="post-excerpt">
										
				<p class="alignmarg"><?php echo get_the_title(); ?></p> 
				
			 	<p class="side-bar-titles"><?php echo get_the_date(); ?></p>
				
				<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span>  </a> 
	
			</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	
<?php get_footer(); ?>	