@extends('layout.app')
@section('title')
calculate age
@endsection
@section('user')
    <a href="{{route('start')}}" class="nav-link" >return to the site</a>
@endsection
@section('content')
<center>  
    <h5 style="color:rgba(212, 22, 22, 0.55)" align="center"> find yor age ,just enter your pirth date <br> <br> </h5>   
      
    <!-- Choose a date and enter in input field -->  
    <b> your pirth date: <input type=date id = DOB> </b>  
    <span id = "message" style="color:rgba(72, 3, 3, 0.55)"> </span> <br><br>    
      
    <!-- Choose a date and enter in input field -->  
    <button type="submit" onclick = "ageCalculator()"> Calculate age </button> <br><br>  
    <h3 style="color:rgba(72, 3, 3, 0.55)" id="result" align="center"></h3>   
    </center>  
<script>  
    function ageCalculator() {  
        var userinput = document.getElementById("DOB").value;  
        var dob = new Date(userinput);  
        if(userinput==null || userinput=='') {  
          document.getElementById("message").innerHTML = "**Choose a date please!";    
          return false;   
        } else {  
          
        //calculate month difference from current date in time  
        var month_diff = Date.now() - dob.getTime();  
          
        //convert the calculated difference in date format  
        var age_dt = new Date(month_diff);   
          
        //extract year from date      
        var year = age_dt.getUTCFullYear();  
        var month = age_dt.getUTCMonth();
        var day = age_dt.getUTCDay();
        //now calculate the age of the user  
        var age = Math.abs(year - 1970);  
          
        //display the calculated age  
        return document.getElementById("result").innerHTML =    
                 "Age is: " + age + " years, "+ month + " monthes. "+ day + " days. ";  
        }  
    }  
</script>
@endsection
