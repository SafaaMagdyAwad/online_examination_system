@extends('layout.app')
@section('title')
    add exam
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')

{{$msg}}

<form method="post" action="{{route('exam.create')}}">
    @csrf
    
    <div>
        <label> Title</label>

        <input type="text" class="input mt-1 form-control loginPass" placeholder="title" name="title">
    </div>
   
    <div>
        <label > Start Time</label>

        <input type="time" class="input mt-1 form-control loginPass" placeholder="start" name="start"  >
    </div>
    <div>
        <label > End Time</label>
        
        <input type="time" class="input mt-1 form-control loginPass" placeholder="end" name="end"  >
    </div>
    <div>
        <label > Start Date</label>

        <input type="date" class="input mt-1 form-control loginPass" placeholder="Start Date" name="sDate"  >
    </div>
    <div>
        <label > End Date</label>
        <input type="date" class="input mt-1 form-control loginPass" placeholder="End Date" name="eDate"  >
    </div>
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled >select year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add exam</button>
</form>

    
@endsection