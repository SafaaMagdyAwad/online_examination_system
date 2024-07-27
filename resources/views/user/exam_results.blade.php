@extends('layout.app')
@section('title')
     exam results
@endsection
@section('user')

    <a href="{{route('userhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')

<h1 hidden>{{$all=0;}}</h1>

<table class="table">
    <thead>
       <tr>
       <th scope="col">question</th>
       <th scope="col">answer</th>
       <th scope="col">your answer</th>
       <th scope="col">mark</th>
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    @foreach ($questions as $question)
    <tr>
            <th scope="row">{{$question['question']}}</th>
            <td>{{$question['ans']}}</td>
            <td>{{$question['student_ans']}}</td>
            <td>{{$question['mark']}}</td>
            <h1 hidden>{{$all=$all+$question['full_mark'];}}</h1>
            
       </tr>
    
@endforeach
       
       
   </tbody>
</table>

{{$total_mark}}/{{$all}}

    
@endsection