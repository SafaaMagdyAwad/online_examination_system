<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'user_id',
        'question_id',
        'question',
        'student_ans',
        'ans',
        'mark',
        'full_mark',
    ];
}
