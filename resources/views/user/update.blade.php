@extends('layout.app')
@section('title')
    update my data
@endsection
@section('user')
@if ($logedinuser['admin']==1)
    
<a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
@endif
@if ($logedinuser['admin']==0)
    {{-- {{$logedinuser['admin']; die;}} --}}
<a href="{{route('userhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
@endif
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')

<h6>
    {{$msg}}
</h6>

<form method="post" action="{{route('user.update',$user['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <label> Name</label>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$user['name']}}" name="name">
    </div> 
    
    <div>
        <label> Email</label>

        <input type="email" class="input mt-1 form-control loginPass" placeholder="{{$user['email']}}" name="email">
    </div>
    
    <div>
        <label> National_id</label>

        <input type="password" class="input mt-1 form-control loginPass" placeholder="{{$user['national_id']}}" name="password">
    </div>

    <div>
        <label> selet year</label>

        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            {{-- <option selected disabled >{{$user['year_id']}}</option> --}}
            <option value=1 {{$user['year_id']==1 ? "selected":""}} >first year</option>
            <option value=2 {{$user['year_id']==2 ? "selected":""}} >second year</option>
            <option value=3 {{$user['year_id']==3 ? "selected":""}} >third year</option>
            <option value=4 {{$user['year_id']==4 ? "selected":""}}>forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update user</button>
</form>

    
@endsection