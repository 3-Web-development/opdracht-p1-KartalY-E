<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function showWinners()
    {
        //ik was hier 
        $winners = DB::table('winner')
        ->join('participants','winner.participant_id','=','participants.id')
        ->select('username')->get();
        //dd($winners);
        return view('welcome',["winners" => $winners]);
    }
}
