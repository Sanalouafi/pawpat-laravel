<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Response extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable =
        [
            'reply',
            'message_id'
        ];
    public function message()
    {
        return $this->belongsTo(Message::class);
    }
    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
