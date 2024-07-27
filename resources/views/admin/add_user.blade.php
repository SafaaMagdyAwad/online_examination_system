@extends('layout.app')
@section('title')
    add student
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection

@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')

{{$msg}}

<form method="post" action="{{route('add_user')}}">
    @csrf
    <p>
        passwors is the national id 
        email name@CSE
    </p>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="name" name="name">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="national_id" name="national_id">
    </div>
   
    <div>
        <input type="number" class="input mt-1 form-control loginPass" placeholder="admin" name="admin" value=0 hidden >
    </div>
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled >select student acadimic year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
    <input type="text" class="input mt-1 form-control loginPass"  name="msg" value="admin was added successfully" hidden>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">add user</button>
</form>

    
@endsection