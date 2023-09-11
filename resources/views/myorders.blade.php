@extends('master')
@section('content')

<h1>my orders</h1>

<hr>
<br>
<div style=" width: 80%">

@foreach($orders as $order)
<div style="width: 35% ;  float:left" >
    <div class="cartimage">
      <a href="detail/{{$order->id}}">
      <img class="cartimage" src="{{$order->image}}" alt="product" style="width:100%">
      </a>
    </div>
  </div>
  
  <div style="padding-top: 50px; margin-left: 10%; width: 40% ; float:left" class="carttext">
    <h3 style="color: rgb(0, 170, 113)">Name : {{$order->name}}</h3>
    <h5 >Delivry Status : {{$order->status}}</h5>
    <h5 > Address : {{$order->address}}</h5>
    <h5 >Payment Status : {{$order->payment_status}}</h5>
    <h5 >Payment Method : {{$order->payment_method}}</h5>
    <hr>
  </div>
  <br><br><br><br><br><br>
  @endforeach
</div>

@endsection
