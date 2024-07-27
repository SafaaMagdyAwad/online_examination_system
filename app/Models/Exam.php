<<<<<<< HEAD
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'year_id',
        'start',
        'end',
        
    ];
}
=======
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'year_id',
        'start',
        'end',
        'sDate',
        'eDate'
    ];
}
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
