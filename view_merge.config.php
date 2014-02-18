<?php

if(!isset($merge_config)) $merge_config = array();

//insert method = [append, prepend]

$merge_config[] = array(
	'module' => 'Project',
	'base_class' => 'ViewEdit',
	'sourcefile' => 'view.edit.php',
	'type' => 'views',
	'method_name' => 'display',
	'insert_method' => 'prepend',
	'content' => '',
);

$merge_config[] = array(
	'module' => 'Project',
	'base_class' => 'ViewDetail',
	'sourcefile' => 'view.detail.php',
	'type' => 'views',
	'method_name' => 'preDisplay',
	'insert_method' => 'append',
	'content' => '//add some code',
);



?>
