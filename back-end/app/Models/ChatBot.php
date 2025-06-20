<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatBot extends Model
{
    //
    protected $fillable = [
        'message_user',
        'reponse_bot',
    ];
}
