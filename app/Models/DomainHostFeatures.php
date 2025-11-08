<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainHostFeatures extends Model
{
    //
    use HasFactory;

    protected $table = 'domain_host_features';
    protected $fillable = [
        'title',
        'description',
        'icon'
    ];
}
