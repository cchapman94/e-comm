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


<!--
<div class="custom-product">
  <div class="col-sm-10">
    <table class="table">
      
      <tbody>
        <tr>
          <td>Amount</td>
          <td>$ {{$total}}</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$ 0</td>
        </tr>
        <tr>
          <td>Delivery</td>
          <td>$ 10</td>
        </tr>
        <tr>
          <td>Total Amount</td>
          <td>$ {{$total+10}}</td>
        </tr>
      </tbody>
    </table>

    <div>
      <form action="/orderplace" method="POST">
        @csrf
        <div class="form-group">
          <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="pwd">Payment Method</label> <br> <br> 
          <input type="radio" value="cash" name="payment"> <span>Online payment</span> <br> <br>
          <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br> <br>
          <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

        </div>
        
        <button type="submit" class="btn btn-default">Order Now</button>
      </form>
    </div>

  </div>
</div>

-->
<div class="jumbotron color-grey-light mt-70">
  <div class="d-flex align-items-center h-100">
    <div class="container text-center py-5">
      <h3 class="mb-0">Checkout</h3>
    </div>
  </div>
</div>

<div class="container">
   <div class="row">
          <!-- -----Cartlist summary----- -->
          <div class="col-md-4 order-md-2 mb-4"> 
            <!-- <h4 class="d-flex justify-content-between align-items-center mb-3"> -->
              <h4 class="cartlist-summary-details">
              <span class="text-muted">Your cart</span>
              <span class="badge badge-secondary badge-pill">{{$amount}}</span>
            </h4>

            <ul class="list-group mb-3">
              
              <!-- <li class="list-group-item d-flex justify-content-between lh-condensed"> -->
                <li class="list-group-item">
                <!--
                <div>
                  <h6 class="my-0">Product name</h6>
                  <small class="text-muted">Brief description</small>
                </div>
              -->
              
                <span>Items ({{$amount}}): </span>            
                <strong> ${{$total}} </strong>

              </li>

         
              <li class="list-group-item">
                <span>Tax (USD):</span>
                <strong>$0</strong>
              </li>


              <li class="list-group-item">
                <span>Delivery (USD):</span>
                <strong>$10</strong>
              </li>


              <li class="list-group-item">
                <span>Order total (USD):</span>
                <strong>${{$total + 10}}</strong>
              </li>
            </ul>


          </div>
    
    <!-- -----Payment info----- -->
    <div class="col-md-8 order-md-1">
      <form action="/orderplace" method="POST">
      @csrf
      <!-- -----Name, Email, Address----- -->
      <!--
        <div class="row">
        <h4 class="mb-3">Billing address</h4>
            <div class="mb-3">  
            <label for="username">Username</label>
            <div class="form-group">
              <textarea name="username" placeholder="Username" class="form-control"></textarea>               
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <div class="form-group">
              <textarea name="email" placeholder="you@example.com" class="form-control"></textarea>           
            </div>
          </div>
      -->
          <div class="mb-3">
            <label for="address">Address</label>
            <div class="form-group">
              <textarea name="address" placeholder="you@1234 Main St" class="form-control"></textarea>        
            </div>
          </div>
               
        <!-- -----Country, State, Zip----- -->
        
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <div class="form-group">
              <textarea name="country" placeholder="" class="form-control"></textarea>        
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <div class="form-group">
              <textarea name="state" placeholder="" class="form-control"></textarea>        
            </div>
          </div>              

          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <div class="form-group">
              <textarea name="zip" placeholder="" class="form-control"></textarea>        
            </div>
          </div>
        </div>
       

        <!-- ----- Payment types----- -->
        <hr class="mb-4">
        <div class="d-block my-3">

          <div class="form-group">
            <label for="pwd">Payment Method</label>

              <div class="custom-control custom-radio">
                <input type="radio" value="credit" name="payment"> <span>Credit card</span> 
              </div>

              <div class="custom-control custom-radio">
                <input type="radio" value="debit" name="payment"> <span>Debit card</span> 
              </div>

              <div class="custom-control custom-radio">
                <input type="radio" value="paypal" name="payment"> <span>Paypal</span> 
              </div>

          </div>

        </div>
      </div>





      <hr class="mb-4">
            
      <button type="submit" class="btn btn-primary btn-lg btn-block">Order Now</button>
      </form>

    </div>


  </div>

</div>




@endsection