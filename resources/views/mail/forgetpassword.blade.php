<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>your vertification code</title>
</head>
<body>
welcome {{$user['name']}} some one is tring to log in to online examination with your email is that you???
<h5>your vertivication code is</h5>
<h3>{{$vCode}}</h3>
<form method="post" action="{{route('vCode',[$user['id']])}}">
    @csrf

    <div>
        <label htmlFor='password' class='text-white'>enter vertivication code</label>
        <input type="text" class="input mt-1 form-control loginPass" placeholder="vertification code" name="userVCode" value={{$vCode}} hidden>
    </div>
    <div>
        <input type="text" class="input mt-1 form-control loginPass" name="vCode" value={{$vCode}} hidden>
    </div>
    
    <button type="submit" class="btn btn-warning input mt-1 form-control loginPass">yes it is me</button>
</form> 
    
</body>
</html>