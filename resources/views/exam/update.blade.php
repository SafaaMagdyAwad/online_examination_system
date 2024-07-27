@extends('layout.app')
@section('title')
    update exam
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

<form method="post" action="{{route('exam.update',$exam['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$exam['title']}}" name="title" value="{{$exam['title']}}">
    </div>
       
 
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="{{$exam['start']}}" name="start" value="{{$exam['start']}}">
    </div>

    
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="{{$exam['end']}}" name="end" value="{{$exam['end']}}">
    </div>
   
 
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled >{{$exam['year_id']}}</option>
            {{-- <option value={{$exam['year_id']}} selected>{{$exam['year_id']==1? "":""}}</option> --}}
            <option value=1 {{$exam['year_id']==1? "selected":""}}>first year</option>
            <option value=2 {{$exam['year_id']==2? "selected":""}}>second year</option>
            <option value=3 {{$exam['year_id']==3? "selected":""}}>third year</option>
            <option value=4 {{$exam['year_id']==4? "selected":""}}>forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update exam</button>
</form>

    
@endsection