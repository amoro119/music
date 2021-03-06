<?php
/**
 * Template Name: gallery

*/

 ?>
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
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<script src="/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
<meta name="author" content="xtunes.cc" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css">
	html { margin-top: 28px !important; }
	* html body { margin-top: 28px !important; }
</style>
 <!--[if IE]>
 <link rel="stylesheet" href="/ie.css" type="text/css" media="screen, projection" />
<![endif]-->
<link rel="stylesheet" href="/style.css" type="text/css" media="screen" charset="utf-8" />
					<script type="text/javascript" charset="utf-8">
				var galleryLoaded=function(){
					$('#slider').after($('<a id="content-left-arrow" href="#"><img src="/images/ico_arrow2.gif" ></a><a id="content-right-arrow" href="#"><img src="/images/ico_arrow.gif" ></a>'));
				 	$('#content-left-arrow').hide();
				 	$('#content-right-arrow').hide();
					var pane=$('.nivo-controlNav');
					$('#slider').before($('<div class="gallery_bg"></div>'));
					var contentWidth=pane.children().size()*72;
				 	if(contentWidth>pane.width()){
				 		$('#content-left-arrow').show();
				 		$('#content-right-arrow').show();
				 		$('#content-left-arrow').click(function(e){
				 			pane.scrollLeft(pane.scrollLeft()-50)
				 			return false;
				 		});
				 		$('#content-right-arrow').click(function(e){
				 			pane.scrollLeft(pane.scrollLeft()+50)
				 			return false;
				 		});
				 	}
				}
			</script>
</head>
<body id="gallery">
		<div class="content">
									<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
		</div>
	</body>
</html>