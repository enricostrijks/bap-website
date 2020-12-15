<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    function elements() { return view('elements'); }
    function generic() { return view('generic'); }
}
