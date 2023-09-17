<?php 
use App\Http\Controllers\ProductController;

$total = ProductController::cart_item();
if ($total==null) {
  $total =0;
}
?>



<div class="topnav" id="myTopnav">
  <a href="/" class="active">Home</a>

  @if (Session::has('signer'))
  <a href="myorders">orders</a>
  <a href="profile">profile</a>
  @endif


  
  <div style=" position: relative ; float: left;">
    <form action="/search">
      <input  class="search-box" name="s" type="search" placeholder="Search" aria-label="Search">
      <button class="serch_button " type="submit">Search</button>
    </form>
  </div>
    
  <a style="float:right" href="/cartlist"> cart({{$total}}) </a>
  
  @if (Session::has('signer'))
  <div class="dropdown" style="float:right">
    <button class="dropbtn"> {{Session::get('signer')['name']}} <i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="/logout">Logout</a>
    </div>
  </div>
  @else
  <a style="float:right" href="/login"> Login </a>

  @endif
</div>
<br>