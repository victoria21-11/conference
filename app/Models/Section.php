<?php

namespace App\Models;

class Section extends Model
{

    protected $table = 'sections';

    protected $fillable = [
        'title',
        'coordinator_id',
        'conference_id',
        'published',

    ];

    protected $scopes = [
        'title' => 'ofLike',
        'coordinator_id' => 'ofStrict',
        'conference_id' => 'ofStrict',
        'published' => 'ofStrict',

    ];

}
