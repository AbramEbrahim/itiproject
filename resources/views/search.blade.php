@extends('master')
@section("content")

<h1 style="text-align: center">Search Result</h1>
<hr style="width:50% ;  box-shadow: 1px 4px 8px 3px rgba(0, 177, 200, 0.2);">
<br>

<div class="row">
  @foreach($products as $product)
  <div class="column">
    <div class="card">
      <img src="{{$product['image']}}" alt="product" style="width:100%">
      <div class="container">
        <h2>{{$product['name']}}</h2>
        <h3>price :{{$product['price']}}</h3>
        <h4 > description :{{$product['description']}}</h4>
        <p><a href="detail/{{$product['id']}}"><button class="button">buy</button></a></p>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection