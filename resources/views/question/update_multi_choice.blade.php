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
<p>update the question</p>
<form method="post" action="{{route('question.update_multiChoice',$question['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$question['question']}}" name="question">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update question</button>
</form>{{-- update question --}}
<p>update the correct answer</p>
<form method="post" action="{{route('question.update_multiChoice',$question['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div class="row">
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct1" value="true"  {{$question['correct1']=='true'? 'checked':''}} aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control" name="ans1" aria-label="Text input with checkbox">{{$question['ans1']}}</lable>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct2" value="true" {{$question['correct2']=='true'? 'checked':''}} aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control"  aria-label="Text input with checkbox">{{$question['ans2']}}</lable>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct3" value="true" {{$question['correct3']=='true'? 'checked':''}} aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control" name="ans1" aria-label="Text input with checkbox">{{$question['ans3']}}</lable>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-text">
                  <input class="form-check-input mt-0" type="checkbox" name="correct4" value="true" {{$question['correct4']=='true'? 'checked':''}} aria-label="Checkbox for following text input">
                </div>
                <lable type="text" class="form-control" name="ans1" aria-label="Text input with checkbox">{{$question['ans4']}}</lable>
            </div>
        </div>
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update the correct answer</button>
</form>
 {{-- update the correct ans --}}

<p>update the mark</p>
<form method="post" action="{{route('question.update_multiChoice',$question['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="{{$question['mark']}}" name="mark">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update mark</button>
</form>



    
@endsection