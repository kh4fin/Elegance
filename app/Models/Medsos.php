<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medsos extends Model
{
    use HasFactory;
    // protected $fillable = ['location', 'location_maps', 'phone_number', '']
    protected $guarded = ['id'];
}
