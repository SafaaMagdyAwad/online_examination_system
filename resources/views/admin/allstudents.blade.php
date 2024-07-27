@extends('layout.app')
@section('title')
    all students
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')
{{-- {{$msg}} --}}

<p>all old passwords are 123456</p>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
    <form style="display: inline"  method="post" action="{{route('search_student')}}">
        @csrf
       

        <select name="year_id" class="input mt-2 form-control loginPass "  aria-label="Example text with button addon" aria-describedby="button-addon1">
            <option selected disabled >search students by year</option>
            <option value=1 >first year</option>
            <option value=2 >second year</option>
            <option value=3 >third year</option>
            <option value=4 >forth year</option>
            
        </select>
        <button type="submit" style="display: inline"  class="btn btn-outline-secondary">search</button>

     </form>
</div>
</div>
        <div class="col-6">

            

            <form style="display: inline"  method="post" action="{{route('search_student')}}">
                @csrf
                <input type="search" class="input mt-2 form-control loginPass " name="name" placeholder="search students by name">
        
             </form>
        </div>
    </div>
</div>


<table class="table">
    <thead>
       <tr>
       <th scope="col">student id</th>
       <th scope="col">name</th>
       <th scope="col">email</th>
       {{-- <th scope="col">password</th> --}}
       <th scope="col">year</th>
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    @foreach ($students as $student)
    <tr>
            <th scope="row">{{$student['id']}}</th>
            <td>{{$student['name']}}</td>
            <td>{{$student['email']}}</td>
            {{-- <td>{{$student['password']}}</td> --}}
            <td>{{$student['year_id']}}</td>
            
            <td>

                    
               
                <div class="row">
                    <a href="{{route('updateuser_form',$student['id'])}}"  style="display: inline" class=" btn btn-warning input mt-1 form-control loginPass">update  data</a>
               
                <a href="{{route('student_degrees',$student['id'])}}"  style="display: inline" class="btn btn-success input mt-1 form-control loginPass">show degrees </a>
                
                <form method="POST" style="display: inline" action="{{route('destroyuser',$student['id'])}}"  >
                    @csrf
                    @method('delete')
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                </div>
                
            </td>
       </tr>
    
@endforeach
       
       
   </tbody>
</table>

    
@endsection