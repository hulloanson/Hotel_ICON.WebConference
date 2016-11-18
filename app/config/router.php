<?php


use Phalcon\Mvc\Router;

$router = new Router();
// MVC routes


// API routes
$api_prefix = '/api';

// Test routes
$router->addGet(
    $api_prefix . '/test',
    'Test::testRouterGet'
);

$router->addPost(
    $api_prefix . '/test/post',
    'Test::testRouterPost'
);

$router->addGet(
    $api_prefix .
    '/test/test-param/{param}',
//    'Test::testRouterParam'
    [
        'controller' => 'test',
        'action' => 'testRouterParam',
        'param' => 1
    ]
);

// Event routes
$router->addGet(
    $api_prefix . '/event/all',
    'Event::apiAll'
);

$router->addGet(
    $api_prefix . '/event/{id}',
    [
        'controller' => 'event',
        'action' => 'apiIDGet',
        'id' => 1
    ]
);

$router->addGet(
    $api_prefix . '/event/search/{title}',
    [
        'controller' => 'event',
        'action' => 'apiSearchTitle',
        'title' => 1
    ]
);

$router->addGet(
    $api_prefix . '/event/date/{year}/{month}/{day}',
    [
        'controller' => 'event',
        'action' => 'apiGetByDate',
        'year' => 1,
        'month' => 2,
        'day' => 3
    ]
);

// Speaker routes
$router->addGet(
    $api_prefix . '/speaker/all',
    'Speaker::apiGetAll'
);

$router->addGet(
    $api_prefix . '/speaker/{id}',
    [
        'controller' => 'Speaker',
        'action' => 'apiGetByID',
        'id' => 1
    ]
);

$router->addGet(
    $api_prefix . '/speaker/{id}/abstract',
    [
        'controller' => 'Speaker',
        'action' => 'apiGetSpeakerAbstract',
        'id' => 1
    ]
);

$router->addGet(
    $api_prefix . '/speaker/search/{name}',
    [
        'controller' => 'Speaker',
        'action' => 'apiSearchSpeakerByName',
        'name' => 1
    ]
);

// Abstract routes
$router->addGet(
    $api_prefix . '/abstract/all',
    'Paper::apiGetAll'
);

$router->addGet(
    $api_prefix . '/abstract/{id}/speaker',
    [
        'controller' => 'paper',
        'action' => 'apiGetPaperSpeaker',
        'paperID' => 1
    ]
);

$router->addGet(
    $api_prefix . '/abstract/{id}',
    [
        'controller' => 'paper',
        'action' => 'apiGetByID',
        'paperID' => 1
    ]
);

$router->addGet(
    $api_prefix . '/abstract/{id}/presentation',
    [
        'controller' => 'paper',
        'action' => 'apiGetAbstractPresentation',
        'paperID' => 1
    ]
);

// Presentation routes
$router->addGet(
    $api_prefix . '/presentation/all',
    'Presentation::apiGetAll'
);

$router->addGet(
    $api_prefix . '/presentation/{id}/event',
    [
        'controller' => 'presentation',
        'action' => 'apiGetEvent',
        'presentID' => 1
    ]
);

$router->addGet(
    $api_prefix . '/presentation/{id}/speaker',
    [
        'controller' => 'presentation',
        'action' => 'apiGetSpeaker',
        'presentID' => 1
    ]
);

$router->addGet(
    $api_prefix . '/presentation/{id}/abstract',
    [
        'controller' => 'presentation',
        'action' => 'apiGetAbstract',
        'presentID' => 1
    ]
);

// Survey routes
$router->addGet(
    $api_prefix . '/survey/all',
    'Survey::apiGetAll'
);

$router->addGet(
    $api_prefix . '/survey/email/{email}',
    [
        'controller' => 'survey',
        'action' => 'apiGetByEmail',
        'email' => 1
    ]
);

$router->addPost(
    $api_prefix . '/survey',
    'Survey::apiSubmit'
);

// Question routes
$router->addGet(
    $api_prefix . '/question/all',
    'Question::apiGetAll'
);

$router->addPost(
    $api_prefix . '/question/add',
    'Question::apiAddQuestions'
);

// Search routes
$router->addGet(
    $api_prefix . '/search/{searchString}',
    [
        'controller' => 'search',
        'action' => 'apiSearch',
        'searchString' => 1
    ]
);

return $router;