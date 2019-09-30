<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Career extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'location', 'department', 'extra', 'notes', 'core_competencies', 'requirements', 'responsibilities'];
}
