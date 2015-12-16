<?php

namespace App\Http\Controllers;

use Shin1x1\Book\Domain\BookRepository;

class FooController extends Controller
{
    public function books(BookRepository $repository)
    {
        return $repository->resolveAll();
    }
}
