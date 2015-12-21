<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpKernel\Tests\Controller;

class FooController extends Controller
{
public function index()
{
return response('hoge');
}
}
