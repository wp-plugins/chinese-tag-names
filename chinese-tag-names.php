<?php 
/*
Plugin Name: Chinese Tag Names
Plugin URI: http://nutsland.cn/blog/archives/177.html
Description: 解决在Win主机下中文Tag名(包括中文分类名,页面名)不能访问的问题
Author: Coconut
Version: 1.0.5
Author URI: http://nutsland.cn
*/

add_action('parse_request', 'coco_chinese_tag_names_parse_request');
add_filter('get_pagenum_link', 'coco_chinese_tag_names_get_pagenum_link');

function coco_chinese_convencoding($str, $to, $from) {
	if (function_exists('mb_convert_encoding')) {
		$str = mb_convert_encoding($str, $to, $from);
	} else if (function_exists('iconv')) {
		$str = iconv($from, $to . "//IGNORE", $str);
	}
	return $str;
}

function coco_chinese_tag_names_parse_request($obj) {
	if(isset($obj->request))
		$obj->request = coco_chinese_convencoding($obj->request, "UTF-8", "GBK");
	if(isset($obj->query_vars['tag']))
		$obj->query_vars['tag'] = coco_chinese_convencoding($obj->query_vars['tag'], "UTF-8", "GBK");
	if(isset($obj->query_vars['pagename']))
		$obj->query_vars['pagename'] = coco_chinese_convencoding($obj->query_vars['pagename'], "UTF-8", "GBK");
	if(isset($obj->query_vars['category_name']))
		$obj->query_vars['category_name'] = coco_chinese_convencoding($obj->query_vars['category_name'], "UTF-8", "GBK");
}

function coco_chinese_tag_names_get_pagenum_link($result) {
	$result =  coco_chinese_convencoding($result, "UTF-8", "GBK");
	return $result;
}


?>