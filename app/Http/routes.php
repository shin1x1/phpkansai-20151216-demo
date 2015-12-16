<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/**
 * @var Router
 */
use Illuminate\Routing\Router;
use Shin1x1\Book\Domain\BookRepository;

$router->get('/', function () {
    return view('welcome');
});

$router->get('/error', function () {
    throw new \Exception();
});

$router->get('/books', function (BookRepository $repository) {
    return $repository->resolveAll();
});
