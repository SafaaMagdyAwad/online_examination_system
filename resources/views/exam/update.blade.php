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
        <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$exam['title']}}" name="title">
    </div>
       
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update title</button>
</form>
<form method="post" action="{{route('exam.update',$exam['id'])}}">
    @csrf
    @method('put')
 
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="{{$exam['start']}}" name="start">
    </div>

   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update start</button>
</form>
<form method="post" action="{{route('exam.update',$exam['id'])}}">
    @csrf
    @method('put')
    
    
    <div>
        <input type="time" class="input mt-1 form-control loginPass" placeholder="{{$exam['end']}}" name="end">
    </div>
   
    
    
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update end time</button>
</form>
<form method="post" action="{{route('exam.update',$exam['id'])}}">
    @csrf
    @method('put')
 
    <div>
        <input type="date" class="input mt-1 form-control loginPass" placeholder="{{$exam['sDate']}}" name="sDate">
    </div>

   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update start date</button>
</form>
<form method="post" action="{{route('exam.update',$exam['id'])}}">
    @csrf
    @method('put')

    <div>
        <input type="date" class="input mt-1 form-control loginPass" placeholder="{{$exam['eDate']}}" name="eDate">
    </div>

    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update end date</button>
</form>
<form method="post" action="{{route('exam.update',$exam['id'])}}">
    @csrf
    @method('put')
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled >{{$exam['year_id']}}</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update year</button>
</form>

    
@endsection