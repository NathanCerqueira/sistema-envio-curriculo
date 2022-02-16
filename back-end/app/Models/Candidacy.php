<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidacy extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'email',
      'phone',
      'path_cv'
    ];
}
