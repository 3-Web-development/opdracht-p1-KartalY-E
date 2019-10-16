<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;

class ParticipantsController extends Controller
{
    //
    public function index()
    {
        $participants = Participant::all();
        return view('participants',['participants' => $participants]);
    }

    public function store()
    {   
        Participant::create(request()->validate([
            'username'=> ['required','unique:participants','min:5','max:255'],
            'email'=> ['unique:participants','required'],
            'address'=> 'required',
            'city'=> 'required',
        ]));

        return redirect('/participants');
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
        return redirect('/participants');
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();
        return redirect('/participants');
    }
}
