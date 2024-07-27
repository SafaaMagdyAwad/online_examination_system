<<<<<<< HEAD
@extends('layout.app')
@section('title')
{{$logedinuser['name']}} home
@endsection
@section('user')
    <a href="{{route('userhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
@endsection
@section('userimage')
<img src="{{$logedinuser['image']}}" alt="user" width="50" height="44">
@endsection
@section('link2')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection

@section('link1')
    <a href="{{route('updateuser_form',$logedinuser['id'])}}" class="nav-link">update my data</a>
@endsection

@section('content')
{{-- {{$msg}} --}}
<section class="slick-slideshow">   
    <div class="slick-custom">
        <img src="images/slideshow/medium-shot-business-women-high-five.jpeg" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Cool Fashion</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Little fashion template comes with total 8 HTML pages provided by Tooplate website.</p>

                        <a href="about.html" class="btn custom-btn">Learn more about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slick-custom">
        <img src="images/slideshow/team-meeting-renewable-energy-project.jpeg" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">New Design</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Please share this Little Fashion template to your friends. Thank you for supporting us.</p>

                        <a href="product.html" class="btn custom-btn">Explore products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slick-custom">
        <img src="images/slideshow/two-business-partners-working-together-office-computer.jpeg" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Talk to us</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Tooplate is one of the best HTML CSS template websites for everyone.</p>

                        <a href="contact.html" class="btn custom-btn">Work with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="container m-4 ">
    <p>
        exams
    </p>
    <div class="row">
        @foreach ($exams as $exam)
            <div class="col-6">
            <div class="card bg-light m-2">
                <h6>title :{{$exam['title']}}</h6>
                <p>starts at: {{$exam['start']}}   ,  ends at: {{$exam['end']}}</p>
                <p>lasts from: {{$exam['sDate']}}   ,to {{$exam['eDate']}}</p>
                <a href="{{route('exam.show',$exam['id'])}}" class="btn btn-success input mt-1 form-control loginPass" >دحيح وهحل الامتحان</a>
                <a href="{{route('show_student_ans',$exam['id'])}}" class="btn btn-success input mt-1 form-control loginPass">درجتي كام يا عالم</a>
            </div>
            </div>
        @endforeach
        
    </div>
</div>
<hr>

    <p>your progress</p>

    <table class="table">
        <thead>
           <tr>
           <th scope="col">Student name</th>
           <th scope="col">Exam title</th>
           <th scope="col">Student mark</th>
           
           </tr>
       </thead>
       <tbody>
        @foreach ($degrees as $degree)
        <tr>
            <th scope="row">{{$degree['student_name']}}</th>
            <td>{{$degree['exam_title']}}</td>
            <td>{{$degree['total_mark']}}</td>     
        </tr>
        
        @endforeach
           
           
       </tbody>
    </table>
@endsection

@section('script')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection
=======
@extends('layout.app')
@section('title')
{{$logedinuser['name']}} home
@endsection
@section('user')
    <a href="{{route('userhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
@endsection
@section('userimage')
<img src="{{$logedinuser['image']}}" alt="user" width="50" height="44">
@endsection
@section('link2')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection

@section('link1')
    <a href="{{route('updateuser_form',$logedinuser['id'])}}" class="nav-link">update my data</a>
@endsection

@section('content')
{{-- {{$msg}} --}}
<section class="slick-slideshow">   
    <div class="slick-custom">
        <img src="images/slideshow/medium-shot-business-women-high-five.jpeg" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Cool Fashion</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Little fashion template comes with total 8 HTML pages provided by Tooplate website.</p>

                        <a href="about.html" class="btn custom-btn">Learn more about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slick-custom">
        <img src="images/slideshow/team-meeting-renewable-energy-project.jpeg" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">New Design</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Please share this Little Fashion template to your friends. Thank you for supporting us.</p>

                        <a href="product.html" class="btn custom-btn">Explore products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slick-custom">
        <img src="images/slideshow/two-business-partners-working-together-office-computer.jpeg" class="img-fluid" alt="">

        <div class="slick-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-10">
                        <h1 class="slick-title">Talk to us</h1>

                        <p class="lead text-white mt-lg-3 mb-lg-5">Tooplate is one of the best HTML CSS template websites for everyone.</p>

                        <a href="contact.html" class="btn custom-btn">Work with us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="container m-4 ">
    <p>
        exams
    </p>
    <div class="row">
        @foreach ($exams as $exam)
            <div class="col-6">
            <div class="card bg-light m-2">
                <h6>title :{{$exam['title']}}</h6>
                <p>starts at: {{$exam['start']}}   ,  ends at: {{$exam['end']}}</p>
                <p>lasts from: {{$exam['sDate']}}   ,to {{$exam['eDate']}}</p>
                <a href="{{route('exam.show',$exam['id'])}}" class="btn btn-success input mt-1 form-control loginPass" >دحيح وهحل الامتحان</a>
                <a href="{{route('show_student_ans',$exam['id'])}}" class="btn btn-success input mt-1 form-control loginPass">درجتي كام يا عالم</a>
            </div>
            </div>
        @endforeach
        
    </div>
</div>
<hr>
<div class="container m-4 ">
    <p>
        future exams
    </p>
    <div class="row">
        @foreach ($futureExams as $futureExam)
            <div class="col-6  ">
            <div class="card bg-light m-2">
                <h6>title :{{$futureExam['title']}}</h6>
                <p>started at: {{$futureExam['start']}}   ,  ended at: {{$futureExam['end']}}</p>
                <p>lasted from: {{$futureExam['sDate']}}   ,to {{$futureExam['eDate']}}</p>
                
            </div>
            </div>
        @endforeach
        
    </div>
</div>
<hr>
<div class="container m-4 ">
    <p>
        past exams
    </p>
    <div class="row">
        @foreach ($pastExams as $pastExam)
            <div class="col-6  ">
            <div class="card bg-light m-2">
                <h6>title :{{$pastExam['title']}}</h6>
                <p>started at: {{$pastExam['start']}}   ,  ended at: {{$pastExam['end']}}</p>
                <p>lasted from: {{$pastExam['sDate']}}   ,to {{$pastExam['eDate']}}</p>
                <a href="{{route('show_student_ans',$pastExam['id'])}}" class="btn btn-success input mt-1 form-control loginPass">
                show my answers details
                </a>
            </div>
            </div>
        @endforeach
        
    </div>
</div>
<hr>
    <p>your progress</p>

    <table class="table">
        <thead>
           <tr>
           <th scope="col">Student name</th>
           <th scope="col">Exam title</th>
           <th scope="col">Student mark</th>
           
           </tr>
       </thead>
       <tbody>
        @foreach ($degrees as $degree)
        <tr>
            <th scope="row">{{$degree['student_name']}}</th>
            <td>{{$degree['exam_title']}}</td>
            <td>{{$degree['total_mark']}}</td>     
        </tr>
        
        @endforeach
           
           
       </tbody>
    </table>
@endsection

@section('script')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
