@extends('layout.app')
@section('title')
    add admin
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')
<p>
    passwors is the national id 
    email name@CSEAdmin
</p>

<form method="post" action="{{route('add_user')}}">
    @csrf
    
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="name" name="name">
    </div>
   
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="national_id" name="national_id">
    </div>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="admin" name="admin" value=1 hidden >
    </div>
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="year_id" name="year_id" value=10 hidden>


        <input type="text" class="input mt-1 form-control loginPass"  name="msg" value="admin was added successfully" hidden>
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add admin</button>
</form>

    
@endsection