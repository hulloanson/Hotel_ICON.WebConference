<?php
// Fall back to pure PHP to test connection without the Phalcon framework
$config = [
    'host' => 'localhost',
    'port' => 27017,
    'username' => 'conman',
    'password' => 'conmanapp',
    'database' => 'conapp'
];

//var_dump(new MongoDB\Driver\Manager(
//    "mongodb://"
//    . $config['username'] . ':' . $config['password'] . '@'
//    . $config['host'] . ':' . $config['port'] . '/'
//    . $config['database']
//));

$client = new MongoClient(
    "mongodb://"
    . $config['username'] . ':' . $config['password'] . '@'
    . $config['host'] . ':' . $config['port']
    . '/' . $config['database']
);

//var_dump($client);

var_dump($client->selectDB('test-conapp'));