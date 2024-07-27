@extends('layout.app')
@section('title')
    all admins
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection

@section('content')
{{-- {{$msg}} --}}


<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card">
   
</div>
</div>
        <div class="col-4">
            <form style="display: inline"  method="post" action="{{route('search_admin')}}">
                @csrf
                <input type="search" class="input mt-2 form-control loginPass " name="name" placeholder="search admin by name">
        
             </form>
        </div>
    </div>
</div>


<table class="table">
    <thead>
       <tr>
       <th scope="col"> id</th>
       <th scope="col">name</th>
       <th scope="col">email</th>
       {{-- <th scope="col">password</th> --}}
       {{-- <th scope="col">year</th> --}}
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    @foreach ($admins as $admin)
    <tr>
            <th scope="row">{{$admin['id']}}</th>
            <td>{{$admin['name']}}</td>
            <td>{{$admin['email']}}</td>
            {{-- <td>{{$student['password']}}</td> --}}
            {{-- <td>{{$admin['year_id']}}</td> --}}
            
            <td>

                    
                <a href="{{route('updateuser_form',$admin['id'])}}" class="btn btn-warning input mt-1 form-control loginPass">update  data</a>
                
                <form method="POST" style="display: inline" action="{{route('destroyuser',$admin['id'])}}"  >
                    @csrf
                    @method('delete')
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                
            </td>
       </tr>
    
@endforeach
       
       
   </tbody>
</table>

    
@endsection