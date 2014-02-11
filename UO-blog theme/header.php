<!DOCTYPE html>
<html>

<head>
	
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	
	<title>Urban Outfitters blog</title>
	
	<link rel="stylesheet" href="http://blog.urbanoutfitters.co.uk/wp-content/themes/UO-blog/css/style.css" type="text/css" />
	
	
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
	
 	<link rel="stylesheet" href="http://blog.urbanoutfitters.co.uk/wp-content/themes/UO-blog/mobile.css" type="text/css"  />
	
	 <script src="http://www.superdwayne.co.uk/mobile/nav/js/modernizr-2.0.6.min.js.js"></script>
	
	</head>
	
<body>

<div id="container">

  <div id="content">
		<div id="mobile-nav">		
					
			<header id="header">
				
				<div class="head">
					
					<a href="#nav" id="activator"></a>
				</div>
			</header>
				<nav id="nav">
					<ul class="child-nav-cat">

						<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
							
							<div id="searchcontainer">
								<input type="text" placeholder="Search - Hit enter to search" value="<?php the_search_query(); ?>" name="s" id="searchform" />
								
							</div>
						</form>
						
						<h1 class="alignnone"> Categories </h1>
					
						<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li='); ?> 
						
					</ul>	
			
				</nav>
				
		</div>
	</div>

	<div id="nav_row" class="main_nav fix">

		<ul class="nav-header">
	
			<li class="parent"><a href="http://www.urbanoutfitters.co.uk/" title="Men's, Women's, Home." target="_blank">Shop online</a>
			
				<ul class="child-nav">
					<li><a href="http://www.urbanoutfitters.com/uk/catalog/category.jsp?id=MENS-EU" title="Shop Men's" target="_blank">Shop Men's</a></li>
					<li><a href="http://www.urbanoutfitters.com/uk/catalog/category.jsp?id=WOMENS-EU" title="Shop women's" target="_blank">Shop Women's</a></li>
					<li><a href="http://www.urbanoutfitters.com/uk/catalog/category.jsp?id=HOME-GIFTS-EU" title="Shop home" target="_blank">Shop Home</a></li>
				</ul>
			</li>
			
			<li class="parent"><a href="#" title="Categories">Categories</a>
				
				<ul class="child-nav-cat">
					<?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li='); ?> 

				</ul>	
				
			</li>
			
			<li class="parent"><a href="https://www.facebook.com/urbanoutfitterseurope" title="Facebook" target="_blank">Facebook</a></li>
			<li class="parent"><a href="https://twitter.com/uoeurope" title="Twitter" target="_blank">Twitter</a></li>
			<li class="parent"><a href="http://pinterest.com/uoeurope/" title="Pinterest" target="_blank">Pinterest</a></li>
			<li class="parent"><a href="http://www.urbanoutfitters.co.uk/scat/community/&temp=community_archive#uotv" title="UOTV" target="_blank">UOTV</a></li>
			<li class="search"><?php get_search_form(); ?>  </li>
			
	
		</ul>
	
	</div>
		
	<div id="boxes">
	
	<?php if ( is_home() ) { 

	} else {

	
	} ?>

		<a id="logo" href="<?php bloginfo('url'); ?>"><img src="http://blog.urbanoutfitters.co.uk/wp-content/themes/platform/images/BLOG_HEADER.png" alt="Urban Outfitters Blog" /> </a>
		
		<a id="logo-mobile" href="<?php bloginfo('url'); ?>"> <h1> Urban blog </h1> </a>
		
    
	</div>	