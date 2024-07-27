@extends('layout.app')
@section('title')
    all admins
@endsection
@section('user')

    <a href="{{route('adminhome')}}" class="nav-link" >{{$logedinuser['name']}} home</a>
    

@endsection
@section('link2')

    <a href="{{route('logout')}}" class="nav-link">logout</a>
@endsection
@section('link1')

    <a href="{{route('exam.all')}}" class="nav-link">all exams</a>
@endsection
@section('content')

<div class="bg-success">
    <div class="container">
        <div class="card bg-success text-light">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-3">{{$exam['title']}}</div>
                        <div class="col-3">year: {{$exam['year_id']}}</div>
                        <div class="col-3">start time: {{$exam['start']}}</div>
                        <div class="col-3">end tine: {{$exam['end']}}</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">

                        <a href="{{route('exam.update_form',$exam['id'])}}" style="display: inline" class="btn btn-success input mt-1 form-control loginPass">update  data</a>
                        <a href="{{route('question.add_discriptive_form',$exam['id'])}}" style="display: inline" class="btn btn-success input mt-1 form-control loginPass">add questions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<table class="table">
    <thead>
       <tr>
       <th scope="col"> id</th>
       <th scope="col">question</th>
       <th scope="col">ans</th>
       <th scope="col">mark</th>
       {{-- <th scope="col">year</th> --}}
       <th scope="col">....</th>
       </tr>
   </thead>
   <tbody>
    @foreach ($multiChoiceQuestions as $multiChoiceQuestion)
    <tr>
            <th scope="row">{{$multiChoiceQuestion['id']}}</th>
            <td>{{$multiChoiceQuestion['question']}}</td>
            <td>{{$multiChoiceQuestion['ans']}}</td>
            <td>{{$multiChoiceQuestion['mark']}}</td>
            {{-- <td>{{$admin['year_id']}}</td> --}}
            
            <td>

                    
                <a href="{{route('question.update_multiChoice_form',$multiChoiceQuestion['id'])}}" class=" btn btn-warning input mt-1 form-control loginPass">update  question</a>
                
                <form method="POST" style="display: inline" action="{{route('deleteMutiChoice',[$multiChoiceQuestion['id']])}}"  >
                    @csrf
                    @method('delete')
                    
                    <td><button  onclick="return confirm('are you sure to delete ?')"  type="submit" class="btn btn-danger input mt-1 form-control loginPass">delete </button></td>
                </form>
                
            </td>
       </tr>
    
    @endforeach
    @foreach ($discriptiveQuestions as $discriptiveQuestion)
    <tr>
            <th scope="row">{{$discriptiveQuestion['id']}}</th>
            <td>{{$discriptiveQuestion['question']}}</td>
            <td>{{$discriptiveQuestion['ans']}}</td>
            <td>{{$discriptiveQuestion['mark']}}</td>
            {{-- <td>{{$admin['year_id']}}</td> --}}
            
            <td>

                    
                <a href="{{route('question.update_discriptive_form',[$discriptiveQuestion['id']])}}" class=" btn btn-warning input mt-1 form-control loginPass">update  question</a>
                
                <form method="POST" style="display: inline" action="{{route('deleteDiscriptive',[$discriptiveQuestion['id']])}}"  >
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