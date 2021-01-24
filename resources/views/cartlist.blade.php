@extends('master')
@section("content")
<div class="custom-product">
  <div class="col-sm-10">
  <!--cartlist items -->
    <div class="trending-wrapper">
    	<h4>Result for Products</h4>
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
              <h2>{{$item->name}}</h2>
              <h5>{{$item->description}}</h5>
            </div>
        </div>

        <!--Display remove from cart -->
        <div class="col-sm-3">

          
          <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from Cart</a>
        
        </div>


      </div>	
      @endforeach
    </div>

  </div>

</div>
@endsection