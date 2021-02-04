@extends('master')
@section("content")

<?php 
use App\Http\Controllers\ProductController;
$amount=0;
if(Session::has('user'))
{
  $amount= ProductController::cartItem();

}

?>

<div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
          <h3 class="mb-0">Your cart</h3>
        </div>
      </div>
    </div>

<div class="custom-product">
  <div class="col-sm-10">
  <!--cartlist items -->
    <div class="trending-wrapper">
      <h4>Cart - {{$amount}} items </h4>
      <!-- <a class="btn btn-success" href="ordernow">Order Now</a> <br><br> -->


    	@foreach($products as $item)
    	<div class="row searched-item cart-list-divider">

        <!-- Display only product images -->
    	  <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
            <img class="trending-img" src="{{$item->gallery}}">
          </a>
        </div>

        <!-- Display only product name & description -->
        <div class="col-sm-4">
            <div class="">
              <h2 class="name">{{$item->name}}</h2>
              <h5>{{$item->description}}</h5>
              <h5>${{$item->price}}</h5>
             
            </div>
        </div>

        <!--Display remove from cart -->
        <div class="col-sm-3">

          
          <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>

          <!-- not functional yet -->
          <!-- 
          <br><br>
          <a class="btn btn-primary" href="#">Move to wishlist</a> <br><br>
        -->

        
        </div>

        

      </div>	

      @endforeach
    
    <a class="btn btn-success" href="ordernow">Order Now</a> <br><br>

<!--
    <div class="col-sm-4">
      <h2>Summary</h2>
      <h3>Products </h3>
      <h3>Tax </h3>
      <h3>Shipping </h3>
      <h3>Total amount </h3>
      <a class="btn btn-primary" href="ordernow">Go to checkout</a>


    </div>

-->



    </div>

  </div>

</div>
@endsection