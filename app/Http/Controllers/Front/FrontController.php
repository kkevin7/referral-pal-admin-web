<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view("front.home");
    }

    public function login()
    {
        return view("pages-login");
    }

}
