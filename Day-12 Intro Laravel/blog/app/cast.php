<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class cast extends Model
{
    protected $table = 'cast';

    protected $fillable = ['nama', 'umur', 'bio'];
}
