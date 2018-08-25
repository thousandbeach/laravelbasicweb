<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    // $fillableの設定 一気にDBに保存するためのホワイトリスト
    protected $fillable = ['name', 'email', 'message',];

}
