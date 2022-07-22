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
        $imageName = date('YmdHis').".".$imageFile->getClientOriginalExtension();
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

    public function editFilmView($id)
    {
        $film = Film::where('id', $id)->first();
        $data['film'] = $film;
        return view('edit-film', $data);
    }

    public function editFilmProcess(Request $request)
    {
        $film = Film::find($request->id);
        $film->title = $request->title;
        $film->rating = $request->rating;
        $film->synopsis = $request->synopsis;
        $film->genre = $request->genre;
        $film->producer = $request->producer;
        $film->production = $request->production;
        $film->cast = $request->cast;
        $film->upcoming = 1;

        if ($request->has('cover')) {
            $imageFile = $request->file('cover');
            $imageName = date('YmdHis').".".$imageFile->getClientOriginalExtension();
            $imageFile->move('img', $imageName);
            $film->img = $imageName;
        }
        $film->save();
        return redirect('list-film');
    }

    public function listFilmView()
    {
        $films = Film::all();
        $data['films'] = $films;
        return view('list-film', $data);
    }
}
