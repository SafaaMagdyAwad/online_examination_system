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
</div>
<form  method="post" action="{{route('question.add_multi_choice',$exam['id'])}}">
    @csrf
        <div>
            <input type="text" class="input mt-1 form-control loginPass" placeholder="question" name="question">
        </div> 
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="mark" name="mark">
        </div>
        
        <label>add answers</label>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct1" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans1" aria-label="Text input with checkbox">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true"  name="correct2" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans2" aria-label="Text input with checkbox">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct3" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans3" aria-label="Text input with checkbox">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct4" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="ans4" aria-label="Text input with checkbox">
                  </div>
            </div>

        </div>
        <div>
            <input type="number" class="input mt-1 form-control loginPass" placeholder="exam_id" name="exam_id" value="{{$exam['id']}}" hidden>
        </div>
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add question</button>
</form>

@endsection

