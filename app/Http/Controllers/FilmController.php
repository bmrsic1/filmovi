<?php

namespace App\Http\Controllers;
use App\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //index stranica
	public function index(Request $request)
	{
	return view('index')
	->with('films', Film::get());
	}
}
