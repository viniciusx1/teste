<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Pagina Inicial");
    return $response;
});

$app->get('/leitura', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Pagina para Leitura");
    return $response;
});

$app->run();