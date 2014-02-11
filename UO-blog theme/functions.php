<?php

add_theme_support( 'post-thumbnails' ); 

add_image_size( 'related-post', 90, 90, true ); // default Post Thumbnail dimensions  

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Randomly chosen placeholder text for post/page edit screen
function wpfme_writing_encouragement( $content ) {
	global $post_type;
	if($post_type == "post"){
	$encArray = array(
		// Placeholders for the posts editor
		" <div class=\"top-image\"> </div> 
		
		  <div class=\"post-sidebar\">[mysidebar id=\"info\"] </div> 
		  
		  <p>Add the post content here</p>"
		
		);
		return $encArray[array_rand($encArray)];
	}
	
}
add_filter( 'default_content', 'wpfme_writing_encouragement' );

?>
