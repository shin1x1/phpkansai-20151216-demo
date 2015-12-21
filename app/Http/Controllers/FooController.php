<?php

namespace App\Http\Controllers;

use App\Repository\Eloquent\BookRepository;
use Unused;

class FooController extends Controller
{
public function books(BookRepository $repository)
{
$list = array(1,2,3);
$repository->resolveAll();
}
}
