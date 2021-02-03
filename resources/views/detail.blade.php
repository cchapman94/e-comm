@extends('master')
@section("content")

<div class="jumbotron color-grey-light mt-70">
      <div class="d-flex align-items-center h-100">
        <div class="container text-center py-5">
          <h3 class="mb-0">Product</h3>
        </div>
      </div>
    </div>


<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}" alt="product detail page">

    </div>
    <div class="col-sm-6">
      <a href="/">Go Back</a>
      <h2 class="title">{{$product['name']}}</h2>
      <h4 class="category">Category: {{$product['category']}}</h4>
      <div class="rating">
        <span class="fas fa-star fa-sm text-primary"></span>
        <span class="fas fa-star fa-sm text-primary"></span>
        <span class="fas fa-star fa-sm text-primary"></span>
        <span class="fas fa-star fa-sm text-primary"></span>
        <span class="far fa-star fa-sm text-primary"></span>
      </div>

      <h3 class="price">${{$product['price']}}</h3>
      <h4 class="details">Details: {{$product['description']}}</h4>
      
      <form action="/add_to_cart" method="POST">
        @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-light"><i class="fas fa-shopping-cart pr-2"></i> Add to Cart</button>       
      </form>
     
      <!-- want buy now to add product to cart and redirect to order now page -->
      <form action="/buy_now" method="POST">
        @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-primary">Buy Now</button>   
      </form>

    </div>

  </div>


</div>
@endsection