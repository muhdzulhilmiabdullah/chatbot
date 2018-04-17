<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
     protected $fillable = [
        'keyword_text','response_text',
    ];
}
