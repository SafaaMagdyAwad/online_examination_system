@extends('layout.app')
@section('link')
    <a href="/" class="nav-link">back</a>
@endsection
@section('title')
    forgot password
@endsection
@section('content')
{{-- {{$user}} --}}
<p>{{$msg}}</p>
<form method="post" action="{{route('change_password',[$user])}}">
    @csrf 
    <div>
        <label htmlFor='password' class='text-dark'>password</label>
        <input type="password" class="input mt-1 form-control loginPass"  name="password">
    </div>
    <div>
        <label htmlFor='password' class='text-dark'>repassword</label>
        <input type="password" class="input mt-1 form-control loginPass"  name="repassword">
    </div>
    
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">continue</button>
</form> 

@endsection 