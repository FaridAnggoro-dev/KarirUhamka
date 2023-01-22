<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacanci extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['categori_id', 'logo', 'job', 'skill'];
}
