<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('app.index');
    }
}
