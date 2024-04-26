<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, SoftDeletes, InteractsWithMedia;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'cni',
        'role_id'
    ];
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function adoptionRequests()
    {
        return $this->hasMany(AdoptionRequest::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function supportAgent()
    {
        return $this->hasOne(SupportAgent::class);
    }
    public function product_users()
    {
        return $this->hasMany(ProductUser::class);
    }


}
