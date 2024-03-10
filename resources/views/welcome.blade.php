@extends('layout.app')
@section('title')
    welcome
@endsection
@section('content')
    
<div class="container">
    <div class="card">
        <div class="bg-dark text-light m-5">
                <a href="{{route('login_form')}}" class="btn btn-warning form-control input">login</a>
                
            </div>
        </div>
    </div>


@endsection