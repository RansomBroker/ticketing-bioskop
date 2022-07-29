<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Film;
use App\Models\Playing;
use App\Models\Seat;
use App\Models\Studio;
use App\Models\Theater;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Utils;

class AdminController extends Controller
{
    public function addNewFilmView()
    {
        return view('add-new-film');
    }

    public function addNewFilmProcess(Request $request)
    {
        $validator = $request->validate([
            'title' => 'required',
            'rating' => 'required',
            'synopsis' => 'required',
            'genre' => 'required',
            'producer' => 'required',
            'production' => 'required',
            'cast' => 'required',
            'cover' => 'required',
            'url' => 'required'
        ]);

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
        $film->upcoming = "1";
        $film->img = $imageName;
        $film->url = $request->url;
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
        $film->upcoming = "0";
        $film->url = $request->url;

        if ($request->has('cover')) {
            $imageFile = $request->file('cover');
            $imageName = date('YmdHis').".".$imageFile->getClientOriginalExtension();
            $imageFile->move('img', $imageName);
            $film->img = $imageName;
        }
        $film->save();
        return redirect('list-film');
    }

    public function deleteFilm($id)
    {
        $film = Film::find($id);
        $film->delete();

        return redirect('/list-film');
    }

    public function addNewTheaterProcess(Request $request)
    {
        // validation
        $validator = $request->validate([
            'name' => 'required',
            'city' => 'required'
        ]);

        // insert teater
        $teater = Theater::updateOrCreate(
            ['name' => $request->name, 'city_id' => $request->city],
            ['name' => $request->name, 'city_id' => $request->city]
        );
        // return
        return redirect('theater-list');
    }

    public function removeTheater($id)
    {
        $theater = Theater::find($id);
        $theater->delete();

        return redirect('/theater-list');
    }

    public function editTheaterView($id)
    {
        $theater = Theater::find($id);
        $cities = City::all();
        $data['cities'] = $cities;
        $data['theater'] = $theater;

        return view('edit-theater', $data);
    }

    public function editTheaterProcess(Request $request)
    {
        $theater = Theater::find($request->id);
        $theater->name = $request->name;
        $theater->city_id = $request->city;
        $theater->save();

        return redirect('/theater-list');
    }



    public function addNewAdminView()
    {
        return view('admin-register');
    }

    public function adminListView()
    {
        $admins = User::all();
        $data['admins'] = $admins;
        return view('admin-list', $data);
    }

    public function addNewAdminProcess(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        //mendaftarkan user
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = '1';
        $user->save();

        //login user
        return redirect('login');
    }

    public function adminRemove($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect('/admin-list');
    }

    public function listFilmView()
    {
        $films = Film::all();
        $data['films'] = $films;
        return view('list-film', $data);
    }

    public function theaterListView()
    {
        $teaters = Theater::with('city')->get();
        $data['theaters'] = $teaters;
        return view('theater-list', $data);
    }

    public function addNewTheaterView()
    {
        $cities = City::all();
        $data['cities'] = $cities;
        return view('add-new-theater', $data);
    }

    public function cityListView()
    {
        $cities = City::all();
        $data['cities'] = $cities;
        return view('city-list', $data);
    }

    public function addNewCityView()
    {
        return view('add-new-city');
    }

    public function editCityView($id)
    {
        $city = City::find($id);
        $data['city'] = $city;
        return view('edit-city', $data);
    }

    public function editCityProcess(Request $request)
    {
        $city = City::find($request->id);
        $city->name = $request->name;
        $city->save();
        return redirect('/city-list');
    }

    public function deleteCity($id)
    {
        $city = City::find($id);
        $city->delete();

        return redirect('/city-list');
    }

    public function addNewCityProcess(Request $request)
    {
        // validasi
        $validator = $request->validate([
            'name' => 'required'
        ]);

        // simpan data
        $city = City::updateOrCreate(
            ['name' => $request->name],
            ['name' => $request->name]
        );

        return redirect('/city-list');
    }

    public function studioListView()
    {
        $studios = Studio::with('theater.city')->get();
        $data['studios'] = $studios;
        return view('list-studio', $data);
    }

    public function addNewStudioView()
    {
        $theaters = Theater::with('city')->get();
        $data['theaters'] = $theaters;

        return view('add-new-studio', $data);
    }

    public function addNewStudioProcess(Request $request)
    {
        // validation
        $validator = $request->validate([
            'name' => 'required',
            'capacity' => 'required|integer',
            'theaterId' => 'required'
        ]);

        //insert into seat table
        $studio = Studio::updateOrCreate(
            ['name' => $request->name, 'theater_id' => $request->theaterId, 'capacity' => $request->capacity],
            ['name' => $request->name, 'theater_id' => $request->theaterId, 'capacity' => $request->capacity]
        );

        // return
        return redirect('/studio-list');
    }

    public function editStudioView($id)
    {
        $studio = Studio::with('theater.city')->where('id', $id)->first();
        $theaters = Theater::with('city')->get();
        $data['studio'] = $studio;
        $data['theaters'] = $theaters;
        return view('edit-studio', $data);
    }

    public function editStudioProcess(Request $request)
    {
        $studio = Studio::find($request->id);
        $studio->name = $request->name;
        $studio->capacity = $request->capacity;
        $studio->theater_id = $request->theaterId;
        $studio->save();

        return redirect('/studio-list');
    }

    public function playingListView()
    {
        $playings = Playing::with('theater.city', 'studio', 'film')->get();
        $data['playings'] = $playings;
        return view('list-playing', $data);
    }

    public function addNewPlayingView()
    {
        $films = Film::all();
        $theaters = Theater::with("city")->get();
        $data['theaters'] = $theaters;
        $data['films'] = $films;
        return view('add-new-playing', $data);
    }

    public function addNewPlayingProcess(Request $request)
    {
        // valditation
        $validatior = $request->validate([
            'film' => 'required',
            'theater' => 'required',
            'date' => 'required',
            'time' => 'required|date_format:H:i:s',
            'duration' => 'required|integer',
            'price' => 'required|integer'
        ]);

        if (Carbon::now() < Carbon::create($request->date) ) {
            return back()->with('status', "Maaf Anda tidak bisa melakukan pembuatan film pada tanggal sesudah hari ini");
        }
        // find studio that has same date
        $studios = Playing::with('studio')
                ->where('theater_id', $request->theater)
                ->where('studio_id', $request->studio)
                ->where('date', $request->date)
                ->get();

        $requestTime = explode(":", $request->time);
        // compare
        foreach ($studios as $studio ){
            $studiosTime = explode(":", $studio->start_time);
            if (
                (Carbon::createFromTime($studiosTime[0], $studiosTime[1], $studiosTime[2]))
                >= Carbon::createFromTime($requestTime[0], $requestTime[1], $requestTime[2])
                &&
                (Carbon::createFromTime($requestTime[0], $requestTime[1], $requestTime[2])->addMinutes($request->duration)
                    <= Carbon::createFromTime($studiosTime[0], $studiosTime[1], $studiosTime[2])->addMinutes($studio->duration))
            ) {
                $startTime = $studio->start_time;
                $endTime = Carbon::createFromTime($studiosTime[0], $studiosTime[1], $studiosTime[2])->addMinutes($studio->duration);
                return back()->with('status', 'Maaf '.$studio->studio->name." sedang digunakan");
            }
        }


        $film = Film::find($request->film);
        $film->upcoming = "0";
        $film->save();

        $playing = new Playing();
        $playing->film_id = $request->film;
        $playing->studio_id = $request->studio;
        $playing->theater_id = $request->theater;
        $playing->date = $request->date;
        $playing->start_time = $request->time;
        $playing->duration = $request->duration;
        $playing->price = $request->price;
        $playing->save();

        return redirect('/playing-list');
    }

    // api
    public function getStudio($id)
    {
        $studios = Studio::whereRelation('theater', 'theater_id', $id)->get();
        return response()->json($studios);
    }

    public function deletePlaying($id)
    {
        $playing = Playing::find($id);
        $playing->delete();

        return redirect('/playing-list');
    }
}
