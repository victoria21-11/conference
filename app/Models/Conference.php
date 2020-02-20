<?php

namespace App\Models;

class Conference extends Model
{

    protected $table = 'conferences';

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'active',
        'registration',

    ];

    protected $scopes = [
        'title' => 'ofLike',
        'start_date' => 'ofDate',
        'end_date' => 'ofDate',
        'active' => 'ofStrict',
        'registration' => 'ofStrict',

    ];

}
