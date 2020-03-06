<?php
require __DIR__ . '/private/vendor/autoload.php';

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App();

$app->get('/', function (Request $req,  Response $res, $args = []) {
    return $res->write('<script src="assets/js/jquery.min.js"></script><script>console.log($().jquery)</script>');
});


$app->get('/demo', function (Request $req,  Response $res, $args = []) {
    return $res->write('<h1>Demo</h1>');
});

$app->run();