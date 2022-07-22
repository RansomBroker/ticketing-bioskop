<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addNewFilmView()
    {
        return view('add-new-film');
    }

    public function addNewFilmProcess(Request $request)
    {
        // store image
        $imageFile = $request->file('cover');
        $imageName = date('YmdHis').".".$imageFile->getClientOriginalName();
        $imageFile->move('img', $imageName);

        $film = new Film();
        $film->title = $request->title;
        $film->rating = $request->rating;
        $film->synopsis = $request->synopsis;
        $film->genre = $request->genre;
        $film->producer = $request->producer;
        $film->production = $request->production;
        $film->cast = $request->cast;
        $film->upcoming = 1;
        $film->img = $imageName;
        $film->save();

        return redirect('list-film');
    }
}
