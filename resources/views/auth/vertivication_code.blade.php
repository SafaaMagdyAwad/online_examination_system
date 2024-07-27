@extends('layout.app')
@section('link')
    <a href="/">back</a>
@endsection
@section('title')
    forgot password
@endsection
@section('content')
{{-- {{$user}} --}}
<p>{{$msg}}</p>
<form method="post" action="{{route('vCode',[$user])}}">
    @csrf

    <div>
        <label htmlFor='password' class='text-white'>enter vertivication code</label>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="vertification code" name="userVCode">
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" name="vCode" value={{$vCode}} hidden>
    </div>
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">continue</button>
</form> 

@endsection 