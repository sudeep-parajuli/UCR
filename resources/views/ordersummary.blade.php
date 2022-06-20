@extends('layouts.app')

@section("title") Shopping Cart @endsection

@section("content")
<h2> CheckOut </h1>
<h5> Order Summary</h5>
<h6>Items: {{"HP pavilion"}}</h6>
<p>Pay Summary</p>
{{$modelname}}
<p>Base price: {{12*3}}</p>
<p>Deposit Fee: $50 </p>
<p>Insurance Charge $10</p>
<p>Student Discount ${{0.1*12}}</p>

<h5> Order Total: {{36+50+10+1.2}}

<h2>Enter your payment method</h2>
<label for="cardNumber">Card Number</label>
<input type="number" id="cardNumber" name="cardNumber">

<label for="cardName">Name on Card</label>
<input type="text" id="cardName" name="cardName">

<label for="expirationDate">Expiration Date</label>
<input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YYYY">

<label for="securityCode">Security Code (CVC)</label>
<input type="number" id="securityCode" name="securityCode">

<button type="sumbit" class="btn btn-warning">Make a Booking</button>

@endsection