<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\StartEmail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function index(){
        $subject="welcome mail";
        $body="mail body";
        FacadesMail::to('engsafaamagdy1024@gmail.com')->send(new StartEmail($subject,$body));
        return view('welcome');
    }
}
=======
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\StartEmail;
use Illuminate\Support\Facades\Mail as FacadesMail;

class MailController extends Controller
{
    public function index(){
        $subject="welcome mail";
        $body="mail body";
        FacadesMail::to('engsafaamagdy1024@gmail.com')->send(new StartEmail($subject,$body));
        return view('welcome');
    }
}
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
