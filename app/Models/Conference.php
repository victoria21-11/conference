<?php

namespace App\Models;

class Conference extends Model
{

    protected $table = 'conferences';

    protected $fillable = [
        'id',
'title',
'description',
'start_date',
'end_date',
'active',
'registration',
'created_at',
'updated_at',

    ];

    protected $scopes = [
        'id' => 'ofStrict',
'title' => 'ofLike',
'description' => 'ofLike',
'start_date' => 'ofDate',
'end_date' => 'ofDate',
'active' => 'ofLike',
'registration' => 'ofLike',
'created_at' => 'ofDate',
'updated_at' => 'ofDate',

    ];

}
