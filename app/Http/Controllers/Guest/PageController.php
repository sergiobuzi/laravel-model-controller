<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        $movies = Movie :: all();
        // dd($movies);

        return view('pages.index', compact('movies'));
    }
}
