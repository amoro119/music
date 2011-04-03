<?php if ( in_category( 'news' ) ) {
 include(TEMPLATEPATH . '/single-news.php');
} elseif( in_category( 'events' ) ) {
 include(TEMPLATEPATH . '/single-events.php');}
 elseif( in_category( 'artists' ) ) {
 include(TEMPLATEPATH . '/single-artists.php');}
 elseif( in_category( 'eshop' ) ) {
 include(TEMPLATEPATH . '/single-eshop.php');}
  elseif( in_category( 'credits' ) ) {
 include(TEMPLATEPATH . '/single-credits.php');}
 else{include(TEMPLATEPATH . '/single-other.php');}
?>