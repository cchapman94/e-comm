@extends('master')
@section("content")
<div class="jumbotron color-grey-light mt-70">
  <div class="d-flex align-items-center h-100">
    <div class="container text-center py-5">
      <h3 class="mb-0">My Orders</h3>
    </div>
  </div>
</div>

<div class="custom-product">
<div class="col-sm-10">
  <!--myorders items -->
    <div class="trending-wrapper">
    	@foreach($orders as $item)
    	<div class="row searched-item cart-list-divider">

        <!-- Display only ordered images -->
    	  <div class="col-sm-3">
          <a href="detail/{{$item->id}}">
            <img class="trending-img" src="{{$item->gallery}}">
          </a>
        </div>

        <!-- Display order information -->
        <div class="col-sm-4">
            <div class="">
              <h2>Name: {{$item->name}}</h2>
              <h5>Delivery Status: {{$item->status}}</h5>
              <h5>Address: {{$item->address}}</h5>
              <h5>Country: {{$item->country}}</h5>
              <h5>State: {{$item->state}}</h5>
              <h5>Zip: {{$item->zip}}</h5>
              <h5>Payment Status:  {{$item->payment_status}}</h5>
              <h5>Payment Method:  {{$item->payment_method}}</h5>

            </div>
        </div>

      </div>	
      @endforeach
    </div>

  </div>

</div>
@endsection