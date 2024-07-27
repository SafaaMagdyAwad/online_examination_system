<<<<<<< HEAD
@extends('layout.app')
@section('title')
    all students results
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link">{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')
{{-- {{$msg}} --}}




<table class="table">
    <thead>
       <tr>
       <th scope="col">student id</th>
       <th scope="col">name</th>
       <th scope="col">degree</th>
       
       </tr>
   </thead>
   <tbody>
    @foreach ($students as $student)
    <tr>
            <th scope="row">{{$student['id']}}</th>
            <td>{{$student['student_name']}}</td>
            <td>{{$student['total_mark']}}</td>
            
            
            
       </tr>
    
@endforeach
       
       
   </tbody>
</table>

    
=======
@extends('layout.app')
@section('title')
    all students results
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link">{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')
{{-- {{$msg}} --}}




<table class="table">
    <thead>
       <tr>
       <th scope="col">student id</th>
       <th scope="col">name</th>
       <th scope="col">degree</th>
       
       </tr>
   </thead>
   <tbody>
    @foreach ($students as $student)
    <tr>
            <th scope="row">{{$student['id']}}</th>
            <td>{{$student['student_name']}}</td>
            <td>{{$student['total_mark']}}</td>
            
            
            
       </tr>
    
@endforeach
       
       
   </tbody>
</table>

    
>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
@endsection