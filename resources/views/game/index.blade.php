<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>game</title>
</head>
<body class=" bg-dark text-light">
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
        <a href="{{route('start')}}" class="btn btn-success" >Go home</a>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>