<?php get_header(); ?>

<?php include("boxes-na.php"); ?>

<div id="container-archives">
	
	<div id="archive-wrapper" role="main">
	
		
			<li class="categories"> 
				<span> <h2> You're currently viewing the category<br /><span class="dynamic-output"><?php single_cat_title(); ?></span></h2> 
	<section><div><?php wp_dropdown_categories('show_option_none=Select category&orderby=desc'); ?></div></section>

<script type="text/javascript"><!--
    var dropdown = document.getElementById("cat");
    function onCatChange() {
		if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
			location.href = "<?php echo get_option('home'); ?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
		}
    }
    dropdown.onchange = onCatChange;
--></script>
</li>
	
	<?php
//get all categories then display all posts in each term
$taxonomy = 'category';
$param_type = 'category__in';


if ( is_category( '234' )) {

  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('234'),
);


} elseif ( is_category( '590' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('590'),
);

} elseif ( is_category( '712' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('712'),
);

} elseif ( is_category( '53' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('53'),
);

} elseif ( is_category( '54' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('54'),
);

} elseif ( is_category( '55' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('55'),
);


} elseif ( is_category( '19' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('19'),
);

} elseif ( is_category( '13' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('13'),
);

} elseif ( is_category( '24' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('24'),
);

} elseif ( is_category( '16' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('16'),
);


} elseif ( is_category( '18' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('18'),
);

} elseif ( is_category( '23' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('23'),
);

} elseif ( is_category( '20' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('20'),
);


} elseif ( is_category( '21' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('21'),
);

} elseif ( is_category( '7' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('7'),
);

} elseif ( is_category( '17' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('17'),
);

} elseif ( is_category( '22' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('22'),
);

} elseif ( is_category( '1' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('1'),
);


} elseif ( is_category( '982' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('982'),
);

} elseif ( is_category( '1008' )) {
  
  $term_args=array(
  'orderby' => 'name',
  'order' => 'ASC',
  'include'  => array('1008'),
);

} else {
	echo('');
}


$terms = get_terms($taxonomy,$term_args);
if ($terms) {
  foreach( $terms as $term ) {
    $args=array(
      "$param_type" => array($term->term_id),
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'caller_get_posts'=> 1,
       
      );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {  ?>
      <div class="category section">
	     
	    <ul>
	    <?php
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      
	        <div class="post-excerpt-post">
					
					<?php echo get_the_title(); ?>
					
					<a href="<?php the_permalink() ?>" rel="bookmark"> <span class="side-bar-text"><?php the_excerpt('<p>Read more...&raquo;</p>'); ?></span>  </a> 
	
				</div>
       <?php
      endwhile;
      ?>
      </ul>
      </div>
 <?php
    }
  }
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>


	
	

	</div>
	
	</div><!-- #content -->
	
	
</div><!-- #container -->

<?php get_footer(); ?>