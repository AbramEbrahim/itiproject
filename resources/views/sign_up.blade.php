@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/login.css')}}">

  <title>sign up</title>
</head>
<body style="background: url({{ URl('images/bg3.jpg')}} ) ; background-repeat: no-repeat;   background-size:cover ;">
    
  <div>
  <div class="column left">
      <br>
      <h1 >welcom in your store</h1>
      <h2>now you can buy what you want  </h2> 
  </div>

  <div class="column right  formm " style="height: auto">
      <br>
      <form action="{{ route('signer.store')}}"  method="post">
        @csrf  
        <br>
          {{-- <button  class="sign" onclick="" >sign in </button>
          <button  class="sign" >login as admin  </button> --}}
          <h3 style="text-align: center ; color: rgb(45, 157, 118)">create your account </h3>
          
          <input class="t" type="text" id="name" name="name" placeholder="enter name" required><br>
          
          <input class="t" type="email" id="email" name="email" placeholder="enter email" required><br>
          
          <input class="t" type="password" id="password" name="password"  placeholder="enter password" required><br>
          
          <button  class="b" type="submit" >sign up </button><br><br>
          
          <a style="margin-left:44%; color: cadetblue; " href="login"> sign in </a>

        </form>

  </div>
  </div>

</body>
</html>




@endsection