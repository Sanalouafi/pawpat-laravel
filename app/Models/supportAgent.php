<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class SupportAgent extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,SoftDeletes;
    protected $fillable = [
        'availability',
        'user_id'
    ];
    public function user()
{
    return $this->belongsTo(User::class);
}
    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
