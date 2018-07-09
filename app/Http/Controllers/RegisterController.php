<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('app.register');
    }
}
