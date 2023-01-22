<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['vacanci_id', 'company', 'location', 'type', 'experience', 'salary', 'major', 'graduate', 'career', 'requirement', 'description'];
}
