<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'multiChoiceQuestion_id',
        'ans',
        'correct',
        
    ];
    public function MultiChoiceQuestion()
    {
        return $this->belongsTo('App\MultiChoiceQuestion');
    }
}
