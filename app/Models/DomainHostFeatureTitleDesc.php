<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainHostFeatureTitleDesc extends Model
{
    //
    use HasFactory;
    protected $table = 'domain_host_features_title_desc';
    protected $fillable = [
        'title',
        'description',
    ];
}
