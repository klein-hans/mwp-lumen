<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regions extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
        'name',
        'updated_by',
    ];
}