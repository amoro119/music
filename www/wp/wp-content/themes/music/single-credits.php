<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/style.css" type="text/css" media="screen" charset="utf-8" />
<meta name="keywords" content="keywords" />
<meta name="description" content="description" />
<script src="/jquery-1.5.2.min.js" type="text/javascript" charset="utf-8"></script>
<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="/jquery.jscrollpane.min.js"></script>
<meta name="author" content="xtunes.cc" />
</head>
	<body id="news">
		<div class="wrapper">
			<div class="bg3">
				<a class="nav_news pa" href="/news.htm"></a> <a class="nav_events pa" href="/events.htm"></a> <a class="nav_artists pa" href="/artists.htm"></a> <a class="nav_music pa" href="/music.htm"></a> <a class="nav_education pa" href="/education.htm"></a> <a class="nav_gallery pa" href="/gallery.htm"></a> <a class="nav_credits pa" href="/credits.htm"><img src="/images/nav_credits_hover2.png" width="113" height="128" alt="Nav Credits Hover2"></a> <a class="nav_contact pa" href="/contact.htm"></a> <a class="nav_eshop pa" href="/eshop.htm"></a> <a class="nav_flux pa" href="/flux.htm"></a> <a style="width:135px;height:100px;display:block;left:55px;top:50px;" class="pa" href="/index.htm"></a> 
			</div>
			<div class="content pa">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
				<div id="content-images" class="horizontal-only">
					<!-- 抽取内容中的图片到这里 -->
				</div>
				<a id="content-left-arrow" href="#">
					<img src="/images/left-arrow.gif" >
				</a>
				<a id="content-right-arrow" href="#">
					<img src="/images/right-arrow.gif" >
				</a>
				<script type="text/javascript" charset="utf-8">
				$(function(){
					$('.content a').each(function(){
						var href=$(this).attr('href');
					    if ( href.match(/.*\.(jpg|jpeg|png|gif)$/) ) {
					      $('#content-images').append($('<img>').attr('src',href));
					      $(this).remove();
					    };
				    })
				 $('.content').jScrollPane();
				 		$('#content-left-arrow').hide();
				 		$('#content-right-arrow').hide();
					var pane=$('#content-images');
					var clonedElem = pane.clone(false, false).css('position', 'absolute').css('width','auto');
					var tempWrapper = $('<div style="width:1px; position: relative;" />').append(clonedElem);
					
					$('body').append(tempWrapper);
				 	var contentWidth = Math.max(pane.outerWidth(), clonedElem.outerWidth());
				 	tempWrapper.remove();
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
				});
			</script>
	
		</div>
	</body>
</html>
