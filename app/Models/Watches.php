<?php

namespace App\Models;

use App\Models\Centers;
use App\Models\AnimalType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Watches extends Model
{
    use HasFactory;

    protected $table = "watches";
    protected $fillable = ["model","watchtype","brand", "release", "desc", "price" , "image"];

    public function animaltype(){
        return $this->belongsTo(WatchType::class);
    }

    // public function adoptionplan(){
    //     return $this->hasMany(Animals::class);
    // }
}
