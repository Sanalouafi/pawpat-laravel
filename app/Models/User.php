<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'role_id'
    ];
    public function role(){
        return $this->belongsTo(Role::class);
    }
    public function adoptionRequests(){
        return $this->hasMany(AdoptionRequest::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function supportAgent()
    {
        return $this->belongsTo(SupportAgent::class);
    }


}
