<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Schedule;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';

    protected $fillable = [
    'subject_code',
    'name',
    'description',
    'instructor',
    'schedule',
    'prelims',
    'midterms',
    'pre_finals',
    'finas',
    'average',
    'remakrs',
    'date_taken'
    ];

}
