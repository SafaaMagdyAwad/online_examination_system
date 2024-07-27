@extends('layout.app')
@section('title')
    add question
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link2')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('link1')

    <a href="{{route('exam.all')}}" class="nav-link">all exams</a>
@endsection
@section('content')

{{$msg}}
<div>
    <a href="{{route('question.add_discriptive_form',$exam['id'])}}" class="btn btn-warning input mt-1 form-control loginPass">add a daiscriptive Question</a>
    <a href="{{route('question.add_multi_choice_form',$exam['id'])}}" class="btn btn-warning input mt-1 form-control loginPass">add a multi choice Question</a>
</div>



@endsection

