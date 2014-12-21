<?php

use BEAR\Resource\Request;
use BEAR\Sunday\Extension\Application\AbstractApp;
use BEAR\Sunday\Extension\Application\AppInterface;
use MyVendor\HelloWorld\AppModule;
use Ray\Di\Injector;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = (new Injector(new AppModule))->getInstance(AppInterface::class);
/** @var $app AbstractApp */

$request = $app->router->match($GLOBALS);
try {
    // resource request
    $page = $app->resource
        ->{$request->method}
        ->uri($request->path)
        ->withQuery($request->query)
        ->request();
    /** @var $page Request */

    // representation transfer
    $page()->transfer($app->responder);

} catch (\Exception $e) {
    $code = $e->getCode() ?: 500;
    http_response_code($code);
    echo $code;
    error_log($e);
}
