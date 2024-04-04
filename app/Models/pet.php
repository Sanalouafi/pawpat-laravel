<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'birth_date', 'breed', 'gender', 'color', 'weight', 'size',
        'vaccination_status', 'description', 'rescued_date', 'adoption_status', 'publish_date', 'type_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'birth_date' => 'date',
        'rescued_date' => 'date',
        'publish_date' => 'date',
        'adoption_status' => 'boolean',
        'vaccination_status' => 'boolean',
    ];

    /**
     * Get the type of the pet.
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function adoptionRequests(){
        return $this->hasMany(AdoptionRequest::class);
    }
    public function likes(){
        return $this->hasMany(Like::class);
    }

}
