<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscriptiveQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'question',
        'ans',
        'mark',
        
    ];
    public function Exam()
    {
        return $this->belongsTo('App\Exam');
    }
}
