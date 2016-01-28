<?php //output with rel attribute
function add_rel_to_gallery($link, $id) {
  return str_replace('<a href=', '<a data-fancybox="true" rel="group" href=', $link);
}
add_filter( 'wp_get_attachment_link', 'add_rel_to_gallery', 10, 2 );