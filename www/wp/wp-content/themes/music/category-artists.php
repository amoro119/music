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
	<body id="artists">
				<ul  class="articlelist">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<li>
				<div class="fl">
					<a href="<?php the_permalink() ?>" target="_top"><?php the_post_thumbnail('thumbnail');?></a>
				</div>
				<div class="fr">
					<h1><a href="<?php the_permalink() ?>" target="_top"><?php the_title(); ?></a></h1>
					<span><?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . ' '; 
  }
}
?></span>
					<p><?php the_excerpt(); ?></p>
					<a class="readmore" href="<?php the_permalink() ?>" target="_top">Read more</a>
				</div>
				<div class="clear"></div>
			</li>
					   <?php endwhile; endif; ?>
		</ul> 
		<div class="pagination pa">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
				<script type="text/javascript" charset="utf-8">
				$(function(){
					$('a.page:last').addClass('last');
				})
			</script>
		</div>
	</body>
</html>