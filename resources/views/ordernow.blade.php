@extends('master')
@section('content')

<h2>your order</h2>

<table>
  <tr>
    <td>price</td>
    <td> {{$totalprice}}  $</td>
  </tr>
  
  <tr>
    <td>Tax</td>
    <td> 0 $ </td>
  </tr>

  <tr>
    <td>delivery</td>
    <td> 10 $ </td>
  </tr>

  <tr>
    <td>Total Amount</td>
    <td>{{$totalprice + 10}} $</td>
  </tr>
  
</table>
<br><br><br><br>
<form action="/orderaddress" method="post">
  @csrf

  <div>
    <input style="width: 60%; height: 30px; border-radius: 10px" name="address" id="address" placeholder="email to contact" required><br><br>
    <label for="pwd">payment method</label><br><br>
  <input type="radio" value="cash" name="payment"> <span>online payment </span> <br><br>
  <input type="radio" value="cash" name="payment"> <span>EMI payment  </span><br><br>
  <input type="radio" value="cash" name="payment"> <span>payment on Delivary </span> <br><br>
  </div>
  <button class="button" style="width: 60% ; margin-left: 0% ; background-color: seagreen">order now</button>
</form>


@endsection
