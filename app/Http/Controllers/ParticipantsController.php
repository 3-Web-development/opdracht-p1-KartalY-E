<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

use App\Settings;
use Auth;
use DB;
$list_winners = [];
class ParticipantsController extends Controller
{
    public function index()
    {
        
        $participants = Participant::all();
        return view('participants',['participants' => $participants]);
    }

    public function ShowWinners()
    {
        //ik was hier 
        $time = date('Y-m-d H:i:s'); 
        $current_comp = DB::table('settings')
        ->where('periode_start_date','<',$time)->where('periode_end_date','>',$time)
        ->value('competition_name');
        
        $winners = DB::table('winner')
        ->join('participants','winner.participant_id','=','participants.id')
        ->join('settings','winner.competition_id','=','settings.id')
        ->where('periode_start_date','<',$time)->where('periode_end_date','>',$time)
        ->where('is_disqualified','=','0')
        ->select('username')->get();
        //dd($winners);

        return view('/welcome',["winners" => $winners,"current_comp" => $current_comp ]);
    }

    public function store(Participant $participant)
    {   
        Participant::create(request()->validate([
            'username'=> ['required','unique:participants','min:5','max:255'],
            'email'=> ['unique:participants','required'],
            'address'=> 'required',
            'city'=> 'required',
            'code' =>['required','min:5','max:5']]));
        $time = date('Y-m-d H:i:s'); 

        if(Auth::user()){
            ///Get id table       
            return redirect('/participants');
        }

        //check if code won competition 
        $comp_id_list = DB::table('settings')->where('periode_start_date','<',$time)->where('periode_end_date','>',$time)->value('id');
        //dd($comp_id_list);

        //dd CHECK CODE 
        if(DB::table('settings')->where('id',$comp_id_list)->value('code') == request('code')){

            DB::table('settings')->where('id',$comp_id_list)->update(['winner' => request('email')]);
            $this->saveWinner($comp_id_list);
        }else{
            return view('welcome',['loser_name' => request('username')]);
        }        
        return view('welcome',['winner_name' => request('username')]);
    }
    public function saveWinner($id)
    {
        $compatition_name = DB::table('settings')->where('id',$id)->value('competition_name');
        $winner_name = DB::table('settings')->where('id',$id)->value('competition_name');
        $participant_id = DB::table('participants')->where('email', request('email'))->value('id');

        DB::table('winner')->insertGetId(
        ['competition_id' => $id
        ,'participant_id' => $participant_id
        ,'competition_name' => $compatition_name
        ,'winner' => $winner_name
        ,'code' => request('code'),
        
        ]);

        return redirect('/welcome');
    }

    public function show(Participant $participant)
    {
        return view('show_participant',compact('participant'));
    }

    public function edit(Participant $participant)
    {
        return view('edit',compact('participant'));
    }

    public function update(Participant $participant)
    {
        $participant->update(request(['username','email','address','city']));
        $participant->update([
            'is_disqualified' => request()->has('is_disqualified')
        ]);
        return redirect('/participants');
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return redirect('/participants');
    }
}
