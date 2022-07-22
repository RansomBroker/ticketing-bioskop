<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $films = Film::all();
        $data['films'] = $films;
        return view('index', $data);
    }
}
