<<<<<<< HEAD
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
=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExams extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'exam_id',
        'student_name',
        'exam_title',
        'total_mark',
    ];
}
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
