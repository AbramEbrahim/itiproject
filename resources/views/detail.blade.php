@extends('master')
@section('content')

<div class="card2">
  <img src="{{$product['image']}}" alt="product" style="width:80%">

    <hr>
    <h1>{{$product['name']}}</h1>
    <h3>price :{{$product['price']}}</h3>
    <h4>Category: {{$product->category->name}}</h4>
    <h5>details : {{$product['description']}}</h5>
    <br>
    <form action="/add_to_cart" method="POST">
      @csrf
      <button style="width: 60% ; margin-left: 20% ; background-color: green"  class="button">Add to cart</button>
      
      
    </form>
    <br><br>
  </div>
  <br><br>
  
  <a href="/"><button class="button">go back</button></a>

@endsection
