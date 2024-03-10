@extends('layout.app')
@section('title')
    play
@endsection
@section('user')
    <a href="{{route('start')}}" class="btn btn-success" >Go home</a>
@endsection
@section('css')
<link rel="stylesheet" href="style.css">
@endsection
@section('content')
<p>رتب العناصر من الاكبر الى الاصغر</p>
    <div class="container bg-dark text-light">
        
            <div id="left" >
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">1^5</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">-1^10</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">20</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">infinity</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">-infinity</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">10^4</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">10^-4</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">-10^-4</div>
                <div class="list" draggable="true" class="btn btn-success"><img src="" alt="">-10^-4</div>
            </div>
            <div id="right"> </div>
        
        
    </div>
<script>
    let lists=document.getElementsByClassName("list");
    let leftBox=document.getElementById("left");
    let rightBox=document.getElementById("right");


    for(list of lists){
        list.addEventListener("dragstart",function(e){
            let selected=e.target;

            rightBox.addEventListener("dragover",function(e){
                e.preventDefault();
            });
            rightBox.addEventListener("drop",function(e){
                rightBox.appendChild(selected);
                selected=null;
            });
            leftBox.addEventListener("dragover",function(e){
                e.preventDefault();
            });
            leftBox.addEventListener("drop",function(e){
                leftBox.appendChild(selected);
                selected=null;
            })
        })
    }
</script>

@endsection