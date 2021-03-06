<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function get_countries()
    {   
        return Country::all()->toArray();
    }

    // get event country
    public function get_event_country($id = null)
    {   
        return Country::where(['id' => $id])->first()->toArray();
    }
}
