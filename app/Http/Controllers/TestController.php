<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        var_dump(111); die();
    }

    public function store(Request $request)
    {
        var_dump($request); die();
    }
}
