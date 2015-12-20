<?php
if(function_exists('acf_add_options_page')) acf_add_options_page();

if(!isset($content_width)) $content_width = 1140;

$inc = scandir(dirname(__FILE__).'/function/');
foreach($inc as $k=>$v){
	if($k>1 && is_file(dirname(__FILE__) . '/function/'.$v)) include(dirname(__FILE__).'/function/'.$v);
}

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );
?>