<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';

    protected $fillable = [
        'ext_id',
        'name',
        'code',
        'ext_code',
    ];
}
