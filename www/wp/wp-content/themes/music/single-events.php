<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/style.css" type="text/css" media="screen" charset="utf-8" />
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<script src="/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
<meta name="author" content="xtunes.cc" />
</head>
	<body id="events">
<div class="wrapper">
<div class="main2">
	<div id="article_bg">
		<img src="images/article_bg.png" width="791" height="554" alt="Article Bg">
	</div>
</div>
		<div class="bg2">
			<a class="nav_news pa" href="/news.htm">
		
	</a>
	<a class="nav_events pa" href="/events.htm">
		
	</a>
	<a class="nav_artists pa" href="/artists.htm">
		
	</a>
	<a class="nav_music pa" href="/music.htm">
		
	</a>
	<a class="nav_education pa" href="/education.htm">
		
	</a>
	<a class="nav_gallery pa" href="/gallery.htm">
		
	</a>
	<a class="nav_credits pa" href="/credits.htm">
		
	</a>
	<a class="nav_contact pa" href="/contact.htm">
		
	</a>
	<a class="nav_eshop pa" href="/eshop.htm">
		
	</a>
	<a class="nav_flux pa" href="/flux.htm">
		
	</a>
	<a style="width:135px;height:100px;display:block;left:55px;top:50px;" class="pa" href="home.htm"></a>
	</div>
	<div class="content pa">
	<p>	
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</p>
	</div>
	<div class="player pa">
		
	</div>
	</div>
	</body>
</html>
