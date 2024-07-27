<<<<<<< HEAD
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
=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAnswer extends Model
{
    use HasFactory;
    protected $fillable = [
        'exam_id',
        'student_id',
        'question_id',
        'question',
        'student_ans',
        'ans',
        'mark',
        'full_mark',
    ];
}
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
