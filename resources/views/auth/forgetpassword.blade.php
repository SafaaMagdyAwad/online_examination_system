<<<<<<< HEAD
@extends('layout.app')
@section('link')
    <a href="/" class="nav-link">back</a>
@endsection
@section('title')
    forgot password
@endsection
@section('content')

<p>{{$msg}}</p>
<form method="post" action="{{route('forgot_password')}}">
    @csrf 
    <div>
        <label htmlFor='password' class='text-white'>email</label>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">continue</button>
</form> 

=======
@extends('layout.app')
@section('link')
    <a href="/" class="nav-link">back</a>
@endsection
@section('title')
    forgot password
@endsection
@section('content')

<p>{{$msg}}</p>
<form method="post" action="{{route('forgot_password')}}">
    @csrf 
    <div>
        <label htmlFor='password' class='text-white'>email</label>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">continue</button>
</form> 

>>>>>>> 2efe76850da2bea73bf7bfa35f471564c0d749e8
@endsection 