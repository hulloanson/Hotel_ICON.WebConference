<?php


use Phalcon\Mvc\Router;

$router = new Router();
$api_prefix = '/api';

$router->addGet(
    $api_prefix . '/test',
    'Test::testRouterGet'
);

$router->addPost(
    $api_prefix . '/test/post',
    'Test::testRouterPost'
);

$router->addGet(
    $api_prefix . '/event/all',
    'Event::apiAll'
);

$router->addGet(
    $api_prefix . '/event/:id',
    [
        'controller' => 'event',
        'action' => 'apiIDGet',
        'id' => 1
    ]
);

$router->addGet(
    $api_prefix . '/event/search/:title',
    [
        'controller' => 'event',
        'action' => 'searchTitle',
        'title' => 1
    ]
);

$router->addGet(
    $api_prefix . '/event/date/:year/:month/:day',
    [
        'controller' => 'event',
        'action' => 'getByDate',
        'year' => 1,
        'month' => 2,
        'day' => 3
    ]
);

return $router;