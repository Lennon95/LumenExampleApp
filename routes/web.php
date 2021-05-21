<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Fastpay\Client\APIClient;
use Illuminate\Http\Request;

$router->get('/', function (Request $request) use ($router) {
    /** @var APIClient $fastpayApiClient */
    $fastpayApiClient = app(APIClient::class);
    try {
        return $fastpayApiClient->consultarVendas($_GET);
    } catch (\InvalidArgumentException $exception) {
        return $exception->getMessage();
    }
});
