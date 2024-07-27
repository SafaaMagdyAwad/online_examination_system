@extends('layout.app')
@section('title')
    past exams
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link">{{$logedinuser['name']}} home</a>
    

@endsection
@section('link1')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('content')



<table class="table">
    <thead>
       <tr>
       <th scope="col">exam id</th>
       <th scope="col">title</th>
       <th scope="col">start_time</th>
       <th scope="col">year_id</th>
       <th scope="col">end time</th>
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    @foreach ($exams as $exam)
    <tr>
            <th scope="row">{{$exam['id']}}</th>
            <td>{{$exam['title']}}</td>
            <td>{{$exam['start']}}</td>
            <td>{{$exam['year_id']}}</td>
            <td>{{$exam['end']}}</td>
            
            <td>
               
               
                
                <form method="POST" style="display: inline" action="{{route('exam.hide',$exam['id'])}}"  >
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