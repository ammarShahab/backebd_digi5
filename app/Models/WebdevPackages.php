<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebdevPackages extends Model
{
    protected $fillable = ['name','price','duration', 'popular', 'features', 'span'];

    protected $casts = [
    'features' => 'array',
    'popular' => 'boolean',
];
}
