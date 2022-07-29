<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Film;
use App\Models\Order;
use App\Models\Playing;
use App\Models\Theater;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Queue\Queue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class IndexController extends Controller
{
    public function index()
    {
        $films = Film::where('upcoming', "0")->get();
        $upcomings = Film::where('upcoming', "1")->get();
        $data['films'] = $films;
        $data['upcomings'] = $upcomings;
        return view('index', $data);
    }

    public function detailFilmView($id)
    {
        $detail = Film::find($id);
        $data['detail'] = $detail;
        return view('details-film', $data);
    }

    public function buyTicketFilmView($id)
    {
        $cities = City::all();
        $detail = Playing::with('theater', 'film', 'theater')->where('film_id', $id)->first();
        $data['detail'] = $detail;
        $data['cities'] = $cities;
        return view('buy-ticket', $data);
    }

    public function getPlayingCity($id, $filmId)
    {
        $playing = Playing::with('studio', 'film', 'theater')       ->whereRelation('theater', 'city_id', $id)
            ->where('film_id', $filmId)
            ->where('date', explode(" ", Carbon::now())[0])
            ->get();

        return response()->json($playing);
    }

    public function seatSelectionView($id)
    {
        $seat = Playing::with('studio', 'theater', 'film')->where('id', $id)->first();
        $order = Order::where("playing_id", $id)->get();
        $data['seat'] = $seat;
        $data['order'] = $order;
        return view('seat', $data);
    }

    public function seatSelectedProcess(Request $request)
    {
        $validator = $request->validate([
            'seat' => 'required',
        ], [
            'required' => "Anda Harus Memilih Salah Satu Kursi Sebelum Melakukan Order"
        ]);

        Cookie::queue('playingId', $request->id, 18);
        Cookie::queue('subTotal', $request->sub, 18);
        Cookie::queue('seat', $request->seat, 18);

        return redirect('/payment');
    }

    public function paymentView()
    {
        // check if cookie not exist
        if (Cookie::get('playingId') == null) {
            return  redirect('/');
        }

        $ticket = count(explode(",", Cookie::get('seat')));

        $ticketItems = explode(",", Cookie::get('seat'));

        $orderId = rand('10000000000', '000000000');

        Cookie::queue('orderId', $orderId, 18);

        $playing = Playing::with('film', 'studio', 'theater')->where('id', Cookie::get('playingId'))->first();

        $data['playing'] = $playing;
        $data['orderId'] = $orderId;
        $data['ticket'] = $ticket;
        $data['ticketItems'] = $ticketItems;
        return view('payment', $data);
    }

    public function createOrder()
    {
        if (Cookie::get('playingId') == null) {
            return  redirect('/');
        }

        $userId = Auth::user()->id;
        $orderId = Cookie::get('orderId');
        $ticket = count(explode(",", Cookie::get('seat')));
        $playingId = Cookie::get('playingId');
        $ticketItems = explode(",", Cookie::get('seat'));
        $price = Cookie::get('subTotal');

        $data = [];

        for ($i = 0; $i < $ticket; $i++){
            $data[] = [
                "user_id" => $userId,
                "playing_id" => $playingId,
                "facture" => $orderId,
                "seat" => $ticketItems[$i],
                "sub" => $price
            ];
        }

        Order::insert($data);

        Cookie::queue(Cookie::forget('playingId'));
        Cookie::queue(Cookie::forget('subTotal'));
        Cookie::queue(Cookie::forget('seat'));
        Cookie::queue(Cookie::forget('orderId'));

        return redirect('/history');
    }

    public function historyView()
    {
        $userId = Auth::user()->id;
        $histories  = Order::with('playing.theater', 'playing.studio', 'playing.film')->where('user_id', $userId)->get();

        $data['histories'] = $histories;
        return view('history', $data);
    }

    public function nowPlayingView()
    {
        $films = Film::where('upcoming', "0")->get();
        $data['films'] = $films;
        return view('now-playing', $data);
    }

    public function upcomingView()
    {
        $upcomings = Film::where('upcoming', "1")->get();
        $data['upcomings'] = $upcomings;
        return view('upcoming', $data);
    }
}
