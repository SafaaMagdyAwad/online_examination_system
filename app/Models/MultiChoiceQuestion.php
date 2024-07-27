<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiChoiceQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'question',
        'mark',
        'ans1',
        'ans2',
        'ans3',
        'ans4',
        'correct1',
        'correct2',
        'correct3',
        'correct4',
        
    ];
    public function Exam()
    {
        return $this->belongsTo('App\Exam');
    }

    public function Answer()
    {
        return $this->hasMany('App\Answer');
    }
}
