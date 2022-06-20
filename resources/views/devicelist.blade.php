@extends("layouts.app")

@section("title") Available Devices @endsection

@section("content")

<section id="devicelist-bg">
<section class="container">
                <div>
                    <h3> Available Computer Brands</h3>

                </div>
            </section>



<section class="container">
<div id="myBtnContainer">
                    <button class="btn logo-btn" onclick="filterSelection('all')" style="background-color: blueviolet;">
                        Show
                        All</button>
                    <button class="btn logo-btn" id="Apple"> Apple</button>
                    <button class="btn logo-btn Asus">Asus</button>
                    <button class="btn logo-btn Dell">Dell</button>
                    <button class="btn logo-btn Hp">HP</button>
                    <button class="btn logo-btn Lenovo">Lenovo</button>
                    <button class="btn logo-btn Toshiba">Toshiba</button>
					<button class="btn logo-btn Microsoft">Microsoft</button>


                </div>

<input class="form-control" id="mysearch" type="text" placeholder="Search..">
  <br>

	<br><br>
	
@foreach ($userdevice as $item)
                            
                         <div class="card mb-3 device-detail" style="max-width: 60rem;" >
  <div class="row g-0 " style="background-color: #F0FFFF">
    <div class="col-md-8" >
      	 						
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
    <div class="col-md-4" >
      <div class="card-body">
                            <form method="POST" action="{{route('cartitem')}}" class="{{$item->brand}}">
							@csrf
								@if(auth()->check())
                            	<input type="text"  name = "cart_user_id" value ="{{Auth::user()->id}}" hidden>
       							@endif
                                    <div>
		<label for="cart-brand"> <h5 class="card-title"><a href="{{url('devicedetail/'.$item->id)}}"> <h2>{{$item->brand}}</h2></a></h5></label>
        <input type="text" id="cart-brand" name="cart-brand" value="{{$item->brand}}" hidden>
        </div>
        
        <div>
        <label for="cart-model"><h5>{{$item->model}}</h5></label>
         <input type="text" id="cart-model" name="cart-model" value="{{$item->model}}" hidden>
        </div>
        <p class="card-text" ><label for="cart-price"><p class="price" style="color:red">${{$item->hourly_cost}}/hour</p></label></p>
                           <input type="text" id="cart-price" name="cart-price" value="{{$item->hourly_cost}}" hidden>	
        <p class="card-text"><small class="text-muted"><label for="cart-availability" <p>{{$item->availability}}</p></label>
                            <input type="text" id="cart-availability" name="cart-availability" value="{{$item->availability}}" hidden>	</small></p>
        @if(auth()->check() && auth()->user()->user_type <> 2)
        @if($item->availability == "Out of Stock")
        <button type="submit" class="btn btn-light cart-submit-button-{{$item->id}}" disabled>Unavailable</button>
        @else
        <button type="submit" class="btn btn-warning cart-submit-button-{{$item->id}}">Add to Cart</button>
        @endif
        @endif
                            </form>
      </div>
        
    </div>
  </div>
</div>  
        @endforeach
        </section>
</section>

<script>
$(document).ready(function(){
  $("#mysearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".device-detail").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
     
@endsection