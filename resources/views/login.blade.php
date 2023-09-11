@extends('master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <title>login </title>
</head>
<body style="background: url({{ URl('images/bg3.jpg')}} ) ; background-repeat: no-repeat; background-size:cover ;">    
    <div>
    <div class="column left">
        <br><br><br><br><br>
        <h1 >welcom in your store</h1>
        <h2>now you can buy what you want </h2> 
    </div>

    <div class="column right  formm"  style="height: auto">
        <br>

        <form action="login" method="post">
            <h3 style="text-align: center ; color: rgb(45, 157, 118)"> sign in now </h3>
            <br>
            @csrf
            {{-- <button  class="sign" onclick="" >sign in </button>
            <button  class="sign" >login as admin  </button> --}}
            <input class="t" type="email" id="email" name="email" placeholder="enter email" ><br>
            
            <input class="t" type="password" id="password" name="password" placeholder="enter password" ><br>

            <button  class="b" type="submit" >sign in </button><br><br>
            
            <a style="margin-left:42%; color: cadetblue; " href="{{ Route('sign_up')}}"> sign up </a><br><br>
            <a style="margin-left:40%; color: rgb(203, 2, 2)135, 95); " href="adminlogin"> Admin login </a>

        </form>

    </div>
    </div>

</body>
</html>



@endsection