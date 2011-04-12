<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/style.css" type="text/css" media="screen" charset="utf-8" />
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<script type='text/javascript' src='/flash/swfobject.js'></script>
<script src="/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="/jquery.jscrollpane.min.js"></script>
<meta name="author" content="xtunes.cc" />
</head>
	<body id="artists">
<div class="wrapper">
<div class="main2">
</div>
		<div class="bg2">
			<a class="nav_news pa" href="/news.htm">
	</a>
	<a class="nav_events pa" href="/events.htm">
		
	</a>
	<a class="nav_artists pa" href="/artists.htm">
		<img src="/images/nav_artists_hover2.png" width="138" height="98" alt="Nav Artists Hover2">
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
	<a style="width:135px;height:100px;display:block;left:55px;top:50px;" class="pa" href="/index.htm"></a>
	</div>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<div class="info">
		<div class="artist">
			<p class="name"><?php the_title(); ?></p>
			<p class="type"><?php echo get_post_meta($post->ID,'type',true) ?></p>
			<p class="country"><?php  echo get_post_meta($post->ID,'country',true)?></p>
		</div>
		<div class="photo"><?php the_post_thumbnail('thumbnail');?></div>
	</div>
	<div class="content pa">
		<div class="body">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="player pa">
<div id='videospace'></div>
	</div>
	</div>
				<?php endwhile; // end of the loop. ?>
				<script type="text/javascript" charset="utf-8">
				function addVideo(url){
					var so = new SWFObject('/flash/player.swf','mpl','392','280','9');
					  so.addParam('allowfullscreen','true');
					  so.addParam('allowscriptaccess','always');
					  so.addParam('wmode','opaque');
					  so.addVariable('file',url);
					  so.addVariable('skin','/flash/glow.zip');
					  //so.addVariable('autostart','true');
					  so.write('videospace');
					}
				$(function(){
					//
					$('.content a').each(function(){
						var href=$(this).attr('href');
						 if ( href.match(/.*\.(jpg|jpeg|png|gif)$/) ) {
						   $('.main2').append($('<img>').attr('src',href));
						   $(this).remove();
						 }else if ( href.match(/.*\.(flv|mp4|ogg)$/) ) {
						   //$('.player').append('<embed src="http://player.longtailvideo.com/player.swf" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="392" height="280" flashvars="netstreambasepath=http%3A%2F%2Fwww.longtailvideo.com%2Fplayers%2Fjw-flv-player%2F&amp;image=http%3A%2F%2Fcontent.bitsontherun.com%2Fthumbs%2FuMp5r6eZ-480.jpg&amp;id=player1&amp;skin=http%3A%2F%2Fcontent.longtailvideo.com%2Fskins%2Fglow%2Fglow.zip&amp;stretching=fill&amp;controlbar.position=over"></embed>');
						   addVideo(href);
						   $(this).remove();
						 };
				    $('.content').jScrollPane();
				    })
				});
			</script>
	</body>
</html>
