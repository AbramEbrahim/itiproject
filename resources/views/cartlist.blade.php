@extends('master')
@section('content')

<h1>your cart</h1>

<hr>
<br>
<div style=" width: 80%">

  @foreach($products as $product)
    <div style="width: 35% ;  float:left" >
    <div class="cartimage">
      <a href="detail/{{$product->id}}">
      <img class="cartimage" src="{{$product->image}}" alt="product" style="width:100%">
      </a>
    </div>
  </div>
  <div style="padding-top: 50px; margin-left: 10%; width: 20% ; float:left" class="carttext">
    <h4>{{$product->name}}</h4>
    <h5 >{{$product->description}}</h5>
  </div>
  <br>

  <div style=" margin-top: 60px; margin-left: 65%; width: 60%;  ">
    <a href="/removecart/{{$product->cart_id}}">
    <button class="cartbtn button" class="">remove from cart </button>
    </a> 
  </div>
  
  <br><br><br><br><br><br>
  <hr>
  @endforeach
</div>
<a href="ordernow">
  <button style="width: 60% ; margin-left: 20% ; background-color: seagreen"  class="button" >order now</button>
</a> 
@endsection
