@extends('layout.app')
@section('title')
    login
@endsection
@section('content')
   
<div class="card">
    <div class="bg-{{$color}}">
        {{$msg}}
    </div>
</div>


<form method="post" action="{{route('login')}}">
    
    @csrf
    
    <div>
        <input type="email" class="input mt-1 form-control loginPass" placeholder="email" name="email">
    </div>
    <div>
        <input type="password" class="input mt-1 form-control loginPass" placeholder="password" name="password">
    </div>
   
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">login</button>
</form>



@endsection