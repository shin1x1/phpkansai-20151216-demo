<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\BookRepository;

class FooController extends Controller
{
    public function books(BookRepository $repository)
    {
        $list = [1, 2, 3];
        $repository->resolveAll();
    }
}
