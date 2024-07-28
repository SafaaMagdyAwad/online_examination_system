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

<form method="post" action="{{route('question.update_multiChoice',$question['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <label>update Question</label>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" value="{{$question['question']}}" name="question">
    </div>
   
   
    <label>update answers</label>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct1" aria-label="Checkbox for following text input"
                      {{$question['correct1']?"checked":""}}>
                    </div>
                    <input type="text" class="form-control" name="ans1" aria-label="Text input with checkbox" value="{{$question['ans1']}}">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true"  name="correct2" aria-label="Checkbox for following text input" 
                      {{$question['correct2']?"checked":""}}>
                    </div>
                    <input type="text" class="form-control" name="ans2" aria-label="Text input with checkbox" value="{{$question['ans2']}}">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct3" aria-label="Checkbox for following text input" {{$question['correct3']?"checked":""}}>
                    </div>
                    <input type="text" class="form-control" name="ans3" aria-label="Text input with checkbox" value="{{$question['ans3']}}">
                  </div>
            </div>

            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-text">
                      <input class="form-check-input mt-0" type="checkbox" value="true" name="correct4" aria-label="Checkbox for following text input" {{$question['correct4']?"checked":""}}>
                    </div>
                    <input type="text" class="form-control" name="ans4" aria-label="Text input with checkbox" value="{{$question['ans4']}}">
                  </div>
            </div>

        </div>
       

    <label> update mark</label>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="{{$question['mark']}}" name="mark" value="{{$question['mark']}}">
    </div>
       
    <button type="submit" class="btn btn-success input mt-1 form-control loginPass">update question</button>
</form>



    
@endsection