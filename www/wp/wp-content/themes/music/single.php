<?php if ( in_category( 'news' ) ) {
 include(TEMPLATEPATH . '/single-news.php');
} elseif( in_category( 'events' ) ) {
 include(TEMPLATEPATH . '/single-events.php');}
 else{include(TEMPLATEPATH . '/single-other.php');}
?>