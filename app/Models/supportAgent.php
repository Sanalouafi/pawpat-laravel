<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportAgent extends Model
{
    use HasFactory;
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
