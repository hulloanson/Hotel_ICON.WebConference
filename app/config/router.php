<?php

$router = new \Phalcon\Mvc\Router();

$router->add(
    '/test',
    [
        'controller' => 'test',
        'action' => 'index'
    ]
);

return $router;