<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function  chatmessage ()
    {
        return  $this->hasOne('App\ChatMessage');
    }
}
