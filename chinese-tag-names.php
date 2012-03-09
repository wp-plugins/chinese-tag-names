<?php 
/*
Plugin Name: Chinese Tag Names
Plugin URI: http://nutsland.cn/blog/archives/177.html
Description: 解决在Win主机下中文Tag名(包括中文分类名,页面名)不能访问的问题
Author: Coconut
Version: 1.0.1
Author URI: http://nutsland.cn
*/

add_action('parse_request', 'coco_chinese_tag_proc');

function coco_chinese_tag_proc($arr) {
	$arr->request = mb_convert_encoding($arr->request, "UTF-8", "GBK");
	if(isset($arr->query_vars['pagename']))
		$arr->query_vars['pagename'] = mb_convert_encoding($arr->query_vars['pagename'], "UTF-8", "GBK");
	if(isset($arr->query_vars['tag']))
		$arr->query_vars['tag'] = mb_convert_encoding($arr->query_vars['tag'], "UTF-8", "GBK");
	if(isset($arr->query_vars['category_name']))
		$arr->query_vars['category_name'] = mb_convert_encoding($arr->query_vars['category_name'], "UTF-8", "GBK");
}


?>