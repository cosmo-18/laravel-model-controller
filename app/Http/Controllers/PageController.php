<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index () {

        $Movies = Movie::all();

        return view ('welcome', compact('Movies'));
    }
}
