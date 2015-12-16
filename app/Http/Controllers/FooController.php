<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\BookRepository;
use Unused;

class FooController extends Controller
{
public function books(BookRepository $repository)
{
$repository->resolveAll();
}
}
