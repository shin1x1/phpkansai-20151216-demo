<?php

namespace App\Http\Controllers;


use App\Repository\Eloquent\BookRepository;

class FooController extends Controller
{
    /**
     * FooController constructor.
     */
    public function __construct(BookRepository $repository)
    {
        $repository->resolveAll();
    }
}