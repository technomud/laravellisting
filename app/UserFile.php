<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
    protected $fillable = [
        'file_id','user_id'
    ];
}
