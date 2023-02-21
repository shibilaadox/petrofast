<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
      'station_code', 'station_name','station_name_ar','region','phone','image','lat','lng','address','address_ar','questions'
    ];
}
