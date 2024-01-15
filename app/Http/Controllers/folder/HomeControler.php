<?php

namespace App\Http\Controllers\folder;

use App\Http\Controllers\Controller;
use App\Models\movie;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index(){
        $movies = movie::all();
        // dd($movies);
        return View('welcome' , compact('movies'));
    }
}
