<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $fillable = ['username','email','address','city','is_disqualified','code','ip_address'];

}
