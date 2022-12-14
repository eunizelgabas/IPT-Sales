<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function unit(){
        return $this->belongsTo('App\Models\Unit');
    }
}
