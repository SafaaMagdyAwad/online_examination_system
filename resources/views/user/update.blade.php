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

<form method="post" action="{{route('updateuser',$user['id'])}}" style="display: inline">
    @csrf
    @method('put')
    <div>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="{{$user['name']}}" name="name">
    </div>
       
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update name</button>
</form>
<form method="post" action="{{route('updateuser',$user['id'])}}">
    @csrf
    @method('put')
    
    
    <div>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="{{$user['email']}}" name="email">
    </div>
   
    
    
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update email</button>
</form>
<form method="post" action="{{route('updateuser',$user['id'])}}">
    @csrf
    @method('put')
    
    
    <div>
        <input type="password" class="input mt-1 form-control loginPass" placeholder="{{$user['national_id']}}" name="password">
    </div>
   
    
    
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update password</button>
</form>
<form method="post" action="{{route('updateuser',$user['id'])}}">
    @csrf
    @method('put')
    <div>
        <select class="input mt-1 form-control loginPass" name="year_id" id="year_id">
            <option selected disabled >{{$user['year_id']}}</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
        </select>

        
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">update year</button>
</form>

    
@endsection