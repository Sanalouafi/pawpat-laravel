<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdoptionRequest extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['status', 'user_id', 'pet_id', 'support_agents_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
    public function supportAgent()
    {
        return $this->belongsTo(SupportAgent::class, 'support_agents_id');
    }

}
