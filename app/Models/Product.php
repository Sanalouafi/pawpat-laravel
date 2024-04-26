<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id'
    ];
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function product_users()
    {
        return $this->hasMany(ProductUser::class);
    }
}
