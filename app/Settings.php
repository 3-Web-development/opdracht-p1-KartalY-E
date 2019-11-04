<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{

    
    protected $fillable = ['competition_name',
                            'periode_start_date',
                            'periode_start_time',
                            'periode_end_date',
                            'periode_end_time',
                            'winner',
                            'code'];
    public function index()
    {

    }
}
