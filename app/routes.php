<?php
$app->get('/hello', function(){
	return "Hello world";
});
$app->get('/', "MyApp\Controller\HomeController::index");

$app->get('/twig/{name}', function ($name) use ($app) {
    return $app['twig']->render('home.twig', array(
        'name' => $name,
    ));
});

$app->mount("/users", new \MyApp\Controller\Provider\User());
