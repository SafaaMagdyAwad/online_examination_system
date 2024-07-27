@extends('layout.app')
@section('title')
    add question
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link">{{$logedinuser['name']}} home</a>
    

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
    <a href="{{route('question.add_multi_choice_form',$exam['id'])}}" class="btn btn-warning input mt-1 form-control loginPass">add a multi choice Question</a>
</div>
<form  method="post" action="{{route('question.add_discriptive',$exam['id'])}}">
    @csrf
    
        <div>
            <label>Add question</label>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="question" name="question">
        </div>
        
        <div>
            <label>Add answer</label>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="ans" name="ans">
        </div>
        <div>
            <label>Add mark</label>

            <input type="number" class="input mt-1 form-control loginPass" placeholder="mark" name="mark">
        </div>
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="exam_id" name="exam_id" value="{{$exam['id']}}" hidden>
        </div>
      
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add question</button>
</form>



@endsection

