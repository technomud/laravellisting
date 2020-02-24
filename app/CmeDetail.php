<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmeDetail extends Model
{
    protected $fillable = [
        'cme_mains_id','topic_of_cme','duration_of_cme','name_of_speaker','desig_quali_speaker','bio_data_file_id'
    ];
}
