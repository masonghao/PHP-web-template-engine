<?php

include_once './template.php';
$tpl = new Template();
$data = array();
$data['data'] = 'hello';
$data['person'] = 'world!';
$data['arr1'] = array('123', '456', '789');
$data['arr2'] = array('abc', 'def', 'ghi');
$data['a'] = '2';

$tpl->display('member', $data);
?>