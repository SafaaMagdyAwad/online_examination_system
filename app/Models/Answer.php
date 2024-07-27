<<<<<<< HEAD
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
=======
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
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
