@extends('master')
@section("content")


<div class="row">
  @foreach($products as $product)
  <div class="column">
    <div class="card">
      <img src="{{$product['image']}}" alt="product" style="width:100%">
      <div class="container">
        <h2>{{$product['name']}}</h2>
        <p class="title">{{$product['description']}}</p>
        <p><a href="detail/{{$product['id']}}"><button class="button">buy</button></a></p>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection