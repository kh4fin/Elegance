<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Header extends Model
{
    use HasFactory;
    // protected $fillable = ['companny_name','title', 'description', 'image'];
    protected $guarded = ['id'];

    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('image') && ($model->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }
        });
    }
}
