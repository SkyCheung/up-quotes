<?php
date_default_timezone_set('America/Los_Angeles');
$arr = array();

for ($i=1; $i <= 20; $i++) { 
	$arr[$i]['id'] = $i;
	//$arr[$i]['title'] = '2月26日回收报价';
	$arr[$i]['ctime'] = date('m月d日',time()-3600*24*$i);
	$arr[$i]['title'] = $arr[$i]['ctime'].'回收报价';
}
echo json_encode($arr);