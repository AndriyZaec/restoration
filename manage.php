<?php
    try{
		require_once 'lib/Twig/Autoloader.php';
		Twig_Autoloader::register();
		$loader = new Twig_Loader_Filesystem('templates');
		$twig = new Twig_Environment($loader, array(
			'cache'       => 'compilation_cache',
			'auto_reload' => true
		));
    }
	catch(Exception $e){
		print($e);
	}
    echo $twig->render('manage.html', array());	