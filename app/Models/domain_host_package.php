<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class domain_host_package extends Model
{
    //
    protected $fillable = ['name','price','duration', 'popular', 'features', 'span'];

    protected $casts = [
    'features' => 'array',
    'popular' => 'boolean',
];
}
