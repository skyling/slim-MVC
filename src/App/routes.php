<?php
// Routes
// 管理端
$app->group('/bos', function () use ($app) {
    $this->any('/{controller}/{method}[/{param}]', function ($request, $response, $args) use ($app) {
        var_dump($args);
        $controller = $args['controller'];
        $method = $args['method'];
        $controllerFull = "App\\Controller\\" . ucfirst($controller);
        if (class_exists($controllerFull)) {
            unset($args['controller'], $args['method']);
            $c = new $controllerFull($app, $request, $response, $args);
            if (is_callable(array($c, $method))) {
                $c->$method();
            }
        }
    });
});

$app->any('/', function ($request, \Slim\Http\Response $response) {
    $response = $response->withRedirect('/index/test');
    return $response;
});

$app->any('/{params:.*}', function ($request, $response, $args) {
    $this->renderer->render($response, '404.phtml', $args);
});

