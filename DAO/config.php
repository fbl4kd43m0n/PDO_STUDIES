<?php

spl_autoload_register(function($clas_name){
	
	$filename = $class_name.".php";
	
	if (file_exists(($filename))) {
		require_once($filename);
	}
});

>?