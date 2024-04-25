<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory,SoftDeletes,InteractsWithMedia;
    protected $fillable = ['name', 'description', 'price', 'stock'];
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
