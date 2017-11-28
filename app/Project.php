<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    protected $fillable = [
        'title',
        'description',
        'category',
        'link',
        'image',
    ];
    protected $dates = [
        'created_at',
        'udpated_at',
    ];

}
