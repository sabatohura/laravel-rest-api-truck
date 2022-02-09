<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;
    protected  $table = "trucks";
    protected $fillable = ['plate_number','vehicle_name','driver_name','driver_phone'];
}
