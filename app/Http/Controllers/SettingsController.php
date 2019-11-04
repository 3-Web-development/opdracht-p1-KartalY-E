<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
class SettingsController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        return view('settings',['settings' => $settings]);
    }
    public function store()
    {   
        Settings::create(request()->validate([
            'competition_name'=> ['required','unique:settings','min:5','max:255'],
            'periode_start_date'=> 'required',
            'periode_end_date'=> 'required',
            'code' => 'required',
        ]));
        return redirect('/settings');
    }
    public function show(Settings $setting)
    {
        return view('show_setting',compact('setting'));
    }

    public function edit(Settings $setting)
    {
        
        return view('edit_setting',compact('setting'));
    }
    public function update(Settings $setting)
    {
        $setting->update(request(['competition_name',
        'periode_start_date',
        'periode_end_date',
        'code',
        ]));
        return redirect('/settings');
    }
    public function destroy(Settings $setting)
    {
        $setting->delete();
        return redirect('/');
    }
}
