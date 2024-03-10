@extends('layout.app')
@section('title')
{{$logedinuser['name']}} home
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="  btn btn-success" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="btn btn-danger input mt-1 form-control loginPass">logout</a>
@endsection
@section('content')
{{-- {{$msg}} --}}
<a href="{{route('add_student_form')}}" class="btn btn-primary input mt-1 form-control loginPass">add student</a>
<a href="{{route('add_admin_form')}}" class="btn btn-success input mt-1 form-control loginPass">add admin</a>
<a href="{{route('allstudents')}}" class="btn btn-danger input mt-1 form-control loginPass">all students</a>
<a href="{{route('alladmins')}}" class="btn btn-dark input mt-1 form-control loginPass">all admins</a>
<a href="{{route('exam.createForm')}}" class="btn btn-warning input mt-1 form-control loginPass">add exam</a>
<a href="{{route('exam.all')}}" class="btn btn-primary input mt-1 form-control loginPass">all exams</a>{{-- //crud questions --}}


    
@endsection