@extends('layout.app')
@section('title')
    update question
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

<h6>
    {{$msg}}
</h6>

<form method="post" action="{{route('question.update_discriptive',$question['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$question['question']}}" name="question">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update question</button>
</form>{{--update question--}}

<form method="post" action="{{route('question.update_discriptive',$question['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$question['ans']}}" name="ans">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update ans</button>
</form>{{--update answer--}}
<form method="post" action="{{route('question.update_discriptive',$question['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="{{$question['mark']}}" name="mark">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update mark</button>
</form>{{--update mark--}}



    
@endsection