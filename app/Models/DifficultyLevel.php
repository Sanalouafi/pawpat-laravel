<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DifficultyLevel extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['level', 'description'];
    public function trainingTips()
    {
        return $this->hasMany(TrainingTip::class);
    }
}
