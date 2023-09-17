@extends('master')
@section('content')
  
  <div style="text-align: center; color: rgb(0, 152, 101) ; background-color: rgb(202, 241, 200); margin: 20px; margin-left: 25%; margin-right: 25%; border-radius: 20px; padding: 20px;">
    <img style=" border-radius:1000px; width: 300px;height: 300px;" src="images/a.jpeg">
    <h1>Name :      {{Session::get('signer')['name']}}</h1><br>
    <h2>Email :    {{Session::get('signer')['email']}}</h2><br>
    <h3>Password :   {{Session::get('signer')['password']}}</h3><br>
    
    <a class="button" style="margin: 0%" href="/logout">Logout</a>
  </div>
<br>
@endsection
