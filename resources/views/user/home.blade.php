@extends('layout.app')
@section('title')
{{$logedinuser['name']}} home
@endsection
@section('user')
    <a href="{{route('userhome')}}" class="btn btn-success" >{{$logedinuser['name']}} home</a>
@endsection
@section('link2')

    <a href="{{route('logout')}}" class="btn btn-success input mt-1 form-control loginPass">logout</a>
@endsection

@section('link1')
    <a href="{{route('updateuser_form',$logedinuser['id'])}}" class="btn btn-success input mt-1 form-control loginPass">update my data</a>
@endsection

@section('content')
{{-- {{$msg}} --}}
<p>
    exams
</p>
<div class="container m-4 bg-success text-light">
    
    
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
<p>
    future exams
</p>
<div class="container m-4 bg-success text-light">
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
<p>
    past exams
</p>
<div class="container m-4 bg-success text-light">
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