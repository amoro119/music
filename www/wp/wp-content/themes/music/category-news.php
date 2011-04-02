<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/style.css" type="text/css" media="screen" charset="utf-8" />
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<script src="/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
<meta name="author" content="xtunes.cc" />
</head>
	<body id="news">
				<ul  class="articlelist">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		   <li><p><?php the_title(); ?></p><a class="readmore" href="<?php the_permalink() ?>" target="_top">Read more</a><div class="clear"></div></li>
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