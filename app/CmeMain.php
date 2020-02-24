<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmeMain extends Model
{
    protected $fillable = [
        'cme_masters_id','start_end_date','abtract_of_lecture'
    ];
}
