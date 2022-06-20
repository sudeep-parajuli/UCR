@extends('layouts.app')

@section("title") Shopping Cart @endsection

@section("content")

<h3> Your Cart Items</h3>

				<div >
                   <a href="{{route('cartitem')}}"> <button type="button" class="btn position-relative" id="btn-cart">
                        <img src="{{asset('image/cart.jpg')}}" alt="" id="cart">
                        <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-danger">
{{$cartcount->count()}}
                            <span class="visually-hidden">unread messages</span></a>
                        </span>
                    </button>
                            </div>
      @if($cartcount->count() == 0)
                            <h3 style="color:red">Your Cart is Empty </h3>	
                            @endif


@foreach ($cartitem as $item)
@if($item->u_id == auth()->user()->id)
<div class="card mb-3 container" style="max-width: 540px; background-color: #F0FFFF">
  <div class="row g-0">

<form method="post" action="{{route('bookinglist')}}">
    <div class="col-md-8">
      <div class="card-body">


@csrf


<div class="col-md-4">

      @if($item->brand == "HP")
							<img src="{{asset('image/HP.jpg')}}" alt="apple-pic" class="product-logo"
                                 >
							@elseif ($item->brand == "Apple")
							<img src="{{asset('image/Apple.jpg')}}" alt="apple-pic" class="product-logo"
                                 >
							@elseif ($item->brand == "Lenovo")
							<img src="{{asset('image/Lenovo.jpg')}}" alt="apple-pic" class="product-logo"
                                 >
							@elseif ($item->brand == "Toshiba")
							<img src="{{asset('image/Toshiba.jpg')}}" alt="apple-pic" class="product-logo"
                                 >
							@elseif ($item->brand == "Microsoft")
							<img src="{{asset('image/Microsoft.jpg')}}" alt="apple-pic" class="product-logo"
                                 >
							@elseif ($item->brand == "Dell")
							<img src="{{asset('image/Dell.jpg')}}" alt="apple-pic" class="product-logo"
                                 >
							@elseif ($item->brand == "Asus")
							<img src="{{asset('image/Asus.jpg')}}" alt="apple-pic" class="product-logo"
                                 >

 						  @endif
    </div>
    </div>
		<input type="text" id= "user_cart_id" name = "user_cart_id" value ="{{auth::user()->id}}" hidden>
        <label for="devicename"><h5 class="card-title">{{$item->brand}}</h5></label><br>
		 <input type="text" class="form-control" id="devicename" aria-describedby="emailHelp" name="devicename" value="{{$item->brand}}" hidden>

        <label for="devicemodel"><h5 class="card-title">{{$item->model}}</h5></label><br>
		 <input type="text" class="form-control" id="devicemodel" aria-describedby="emailHelp" name="devicemodel" value="{{$item->model}}" hidden>

        <label><p class="card-text">{{$item->availability}}</p></lable>
        <label for="devicenumber">Quantity</label>

		<select id="devicenumber" name="devicenumber">
        @for($i=1; $i<=20; $i++)

  		<option>{{$i}}</option>

  		@endfor
</select>


         |
        <a href="{{url('deletecart/'.$item->id)}}"> Delete </a>
        <br><br>
        <label for="number_of_hour_booked">Required Number of Hours</label>
        <input type="number" id="number_of_hour_booked" name="number_of_hour_booked">




       <br><br>
        <label for = "device" class="card-text" style="font-size:20px; color:red">Price: ${{$item->price}}/hour</label>
        <input type="text" id="device" name="device" value = {{$item->price}} hidden><br><br>
        
              
        </div>
        
        <div id="base-p">
        <h5>Base Price:</h5> 
        <h5 id="base-price"></h5>
        </div>
        <h5>Deposit Amount: $50</h5> 
        <h5>Insurance Amount: $10</h5> 
        @if(auth()->check() && auth()->user()->user_type == 0)
        <div id="discount-a">
        <h5>Discount Amount:</h5> 
        <h5 id="discount-amount"></h5>
        </div>
        @endif
        <br>
 
        <div style="color:red" id="total-p">
        <h5><label for="device_price_new">Total Amount</label></h5>
       <h5> <input id="device_price_new" name="device_price_new" style="border: none; text:center; width: 30%; color: red" readonly ><br><h5></div>
<br>
       <button type="submit" class="btn btn-warning">Proceed to CheckOut</button>

        </form>
  
    </div>
  </div>



<br>

	@endif
       @endforeach
        
       

       
        
      <script>
	
       
$( "#number_of_hour_booked" )
  .keyup(function() {
    var value = $( this ).val();
   var price = $("#device").val();
  	var quantity = $("#devicenumber").val();
  $( "#base-price" ).text( value * price * quantity);
  $("#discount-amount").text((value*price*quantity*0.10).toFixed(2));
  @if(auth()->user()->user_type == 0)
  $("#device_price_new").val(value * price *quantity + 50 + 10 - value*price*quantity*0.1);
  @else
  $("#device_price_new").val(value * price *quantity + 50 + 10);
  @endif
  })       
  .keyup();



</script>
        	        
 



@endsection

