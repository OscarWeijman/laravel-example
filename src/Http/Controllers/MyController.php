<?php

namespace OscarWeijman\LaravelExample\Http\Controllers;

class MyController
{

    public function index(): string
    {
        return view('example::packageView');
    }

}
