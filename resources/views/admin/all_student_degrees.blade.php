@extends('layout.app')
@section('title')
    all students
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link">{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')
{{-- {{$msg}} --}}

<p>all old passwords are 123456</p>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
    <form style="display: inline"  method="post" action="{{route('search_student')}}">
        @csrf
        <select name="year_id" class="input mt-2 form-control loginPass " >
            <option selected disabled >search students by year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
            
        </select>
        <button type="submit" style="display: inline" class="btn btn-warning  mb-2  ">search</button>

     </form>
</div>
</div>
        <div class="col-6">
            <form style="display: inline"  method="post" action="{{route('search_student')}}">
                @csrf
                <input type="search" class="input mt-2 form-control loginPass " name="name" placeholder="search students by name">
        
             </form>
        </div>
    </div>
</div>

<div class="card">
    <div class="container">
        
        <div class="row">
                @foreach ($degrees as $degree)
                <div class="col-4 bg-dark text-light m-2">
                    <h4>{{$degree['exam_title']}}</h4>
                    <p>{{$degree['total_mark']}}</p>
                </div>
                @endforeach
            </div>
        
    </div>
</div>

    
@endsection