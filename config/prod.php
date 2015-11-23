<?php

// configure your app for the production environment

$app['twig.path'] = array(__DIR__.'/../src/View');
$app['twig.options'] = array('cache' => __DIR__.'/../var/cache/twig');

$app['monolog.name']    = 'hlutml';
$app['monolog.logfile'] = __DIR__.'/../var/logs/prod.log';
$app['monolog.level']   = "ERROR";

$app['site'] = [
    'belgium' => [
        'where'      => 'Boom, Belgium',
        'date'       => 'July 22, 2016',
        'video'      => 'tdwbYGe8pv8',
        'videoStart' => 120,
    ],
    'usa' => [
        'where'      => 'Atlanta, USA',
        'date'       => '',
        'video'      => 'hIVRWl9qgtA',
        'videoStart' => 43,
        'videoRatio' => '2.4'
    ],
    'brazil' => [
        'where'      => 'São Paulo, Brazil',
        'date'       => 'April 21, 2016',
        'video'      => 'eRMT29fKxtA',
        'videoStart' => 57,
        'videoRatio' => '2.4'
    ]
];