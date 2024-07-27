@extends('layout.app')
@section('title')
    exam
@endsection
@section('user')

    <a href="{{route('userhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link2')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection

@section('content')
السؤال اللي هيتحل هيتمسح متعملش  ارسال للسؤال غير وانت متاكد منه
<div class="bg-success">
    <div class="container">
        <div class="card bg-dark text-light">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3">{{$exam['title']}}</div>
                        <div class="col-3">year: {{$exam['year_id']}}</div>
                        <div class="col-3">start time: {{$exam['start']}}</div>
                        <div class="col-3">end tine: {{$exam['end']}}</div>
                    </div>
                </div>
                <div class="col-6">
                    

                </div>
            </div>
        </div>
    </div>
    
</div>
{{-- //form --}}
{{$msg}}
@if (count($discriptiveQuestions)===0)
    <h5>you have solved all discriptive questions or exam still dont contain discriptive questions</h5>
@else
        @foreach ($discriptiveQuestions as $discriptiveQuestion)
        <form method="post" action="{{route('store_stu_ans',$exam['id'])}}">
        
        @csrf
        
        <div>
            <label for="">{{$discriptiveQuestion['question']}}</label>

        </div>
        <div>
            <label>your answer</label>
            <input type="text"  name="student_ans">
        </div>
        {{-- student questions table --}}
        {{-- student answer --}}
        <div>
            <input type="hidden"  name="question" value="{{$discriptiveQuestion['question']}}" hidden>
        </div>
        <div>
            <input type="hidden"  name="ans" value="{{$discriptiveQuestion['ans']}}" hidden>
        </div>
        <div>
            <label>{{$discriptiveQuestion['mark']}} marks</label>
            <input type="hidden"  name="full_mark" value="{{$discriptiveQuestion['mark']}}" hidden>
        </div>
        <div>
            <input type="hidden"  name="mark" value="0" hidden>{{-- student degree changeble --}}
        </div>
        {{-- select boxes --}}
        <div>
            <input name="hidden" value="{{$exam['id']}}" hidden>
        </div>
        
        <div>
            <input name="hidden" value="{{$discriptiveQuestion['id']}}" hidden>
        </div>
        <div>
            <input name="hidden" value="{{$logedinuser['id']}}" hidden>
        </div>

        <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">submit this answer</button>
    </form>
    @endforeach
@endif

@if (count($multiChoiceQuestions)===0)
    <h5>you have solved all multi choice questions or exam still dont contain multi choice questions </h5>
@else
        @foreach ($multiChoiceQuestions as $multiChoiceQuestion)
            <form method="post" action="{{route('store_stu_ans_multi',$exam['id'])}}">
        
                @csrf
                
                <div>
                    <label for="">{{$multiChoiceQuestion['question']}}</label>

                </div>
                
                {{-- student questions table --}}
                {{-- student answer --}}
                <div>
                    <input type="text"  name="question" value="{{$multiChoiceQuestion['question']}}" hidden>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox"  name="student_ans" value="{{$multiChoiceQuestion['ans1']}}" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox">{{$multiChoiceQuestion['ans1']}}</lable>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox"  name="student_ans" value="{{$multiChoiceQuestion['ans2']}}" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox">{{$multiChoiceQuestion['ans2']}}</lable>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox"  name="student_ans" value="{{$multiChoiceQuestion['ans3']}}" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox">{{$multiChoiceQuestion['ans3']}}</lable>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                            <input class="form-check-input mt-0" type="checkbox" name="student_ans" value="{{$multiChoiceQuestion['ans4']}}" aria-label="Checkbox for following text input">
                            </div>
                            <lable type="text" class="form-control" value="" aria-label="Text input with checkbox">{{$multiChoiceQuestion['ans4']}}</lable>
                        </div>
                    </div>
                </div>{{-- //is the student mark --}}
                <div>
                    <input type="textarea"  name="mark" value="0" hidden>{{-- //is the student mark --}}
                </div>
                <div>
                    <input type="textarea"  name="ans" value="changible" hidden>{{-- //is the student ans --}}
                </div>
                <div>
                    <label>{{$multiChoiceQuestion['mark']}} marks</label>
                    <input type="textarea"  name="full_mark" value="{{$multiChoiceQuestion['mark']}}" hidden>{{-- //is the question mark --}}
                </div>
            
                {{-- select boxes --}}
                <div>
                    <input name="exam_id" value="{{$exam['id']}}" hidden>
                </div>
                
                <div>
                    <input name="question_id" value="{{$multiChoiceQuestion['id']}}" hidden>
                </div>
                <div>
                    <input name="user_id" value="{{$logedinuser['id']}}" hidden>
                </div>

                <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">submit this answer</button>
        </form>
    @endforeach
@endif


<a href="{{route('show_student_ans',$exam['id'])}}"  class="btn btn-primary input mt-1 form-control loginPass"> show my answers</a>
    
@endsection