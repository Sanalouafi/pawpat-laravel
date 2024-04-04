<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'message_text',
        'user_id',
        'support_agent_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function supportAgent()
    {
        return $this->belongsTo(SupportAgent::class);
    }
}
