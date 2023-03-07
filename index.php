<?php 

$name = !empty($_REQUEST['name']) ? trim(strtolower($_REQUEST['name'])) : 'index';

$lists = [
	'index' => 'index',
	'thong-tin-ca-nhan' => 'thong-tin-ca-nhan',
	'ke-toan' => 'ke-toan',
	'dich-vu-ban-hang' => 'dich-vu-ban-hang',
	'kinh-doanh' => 'kinh-doanh',
	'hop-giao-ban' => 'hop-giao-ban',
	'hop-tuan' => 'hop-tuan',
	'hop-thang' => 'hop-thang',
	'kho-luu-tru-bien-ban-hop' => 'kho-luu-tru-bien-ban-hop',
	'bien-ban-hop' => 'bien-ban-hop',
	'ke-hoach-va-giao-viec' => 'ke-hoach-va-giao-viec',
	'login' => 'login',
];


$template_path = 'template/';
$file_extension = ".php";

$not_found = 0;
// Page not in list
if(!array_key_exists($name, $lists)){
	$not_found = 1;
}else {
	$html_page = $template_path.$lists[$name].$file_extension;
	// check file not found
	if(file_exists($html_page)){
		require_once($html_page);
		die;
	}
	$not_found = 1;
}
// Display 404
$not_found ? require_once($template_path.'404'.$file_extension) : '';