<<<<<<< HEAD
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        's1',
        's2',
        's3',
        's4',
        'ans',
        'mark',
        'exam_id',
        
    ];
}
=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        's1',
        's2',
        's3',
        's4',
        'ans',
        'mark',
        'exam_id',
        
    ];
}
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
