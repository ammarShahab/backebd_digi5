<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebdevHero extends Model
{
  protected $fillable = ['title','description','image','cta1','cta2'];
}
