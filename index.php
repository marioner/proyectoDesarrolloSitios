<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
    $arreglo = ['hola' => 'mundo'];
	
	return $app->json($arreglo);
});

$app->run();