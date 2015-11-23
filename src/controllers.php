<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/{location}', function ($location) use ($app) {

    $s = $app['site'][$location];
    if (!$s) {
        $app->abort(404, "Location not found");
    }

    $dt_end = new DateTime($s['date']);
    $remain = $dt_end->diff(new DateTime());

    return $app['twig']->render('index.html.twig', array(
        'ct'        => $remain,
        'location'  => $location,
        's'         => $s
    ));
})
    ->value('location', 'belgium')
    ->bind('home');

$app->error(function (\Exception $e, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html',
        'errors/'.substr($code, 0, 2).'x.html',
        'errors/'.substr($code, 0, 1).'xx.html',
        'errors/default.html',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});
