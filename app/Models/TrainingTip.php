<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingTip extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'description',
        'difficulty_level_id'
    ];
    public function difficultyLevel()
    {
        return $this->belongsTo(DifficultyLevel::class);
    }
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
}
