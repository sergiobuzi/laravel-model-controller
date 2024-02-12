<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;

use App\Models\Movie;

class PageController extends Controller
{
    public function index() {

        $Movies = Movie :: all();
        dd($Movies);

        return view('pages.index');
    }
}
