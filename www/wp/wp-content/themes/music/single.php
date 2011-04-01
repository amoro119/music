<?php if ( in_category( 'news' ) ) {
 include(TEMPLATEPATH . '/single-news.php');
} elseif( in_category( '4' ) ) {
 include(TEMPLATEPATH . '/single-news.php');}
 else{include(TEMPLATEPATH . '/single-other.php');}
?>