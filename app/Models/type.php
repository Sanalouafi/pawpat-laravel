<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'type_name'
    ];
    public function pets(){
        return $this->hasMany(Pet::class);
    }
    public function trainingTips()
    {
        return $this->belongsToMany(TrainingTip::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
