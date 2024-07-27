<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExams extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'exam_id',
        'student_name',
        'exam_title',
        'total_mark',
    ];
}
