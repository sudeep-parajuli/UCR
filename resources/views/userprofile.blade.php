@extends("layouts.app")

@section("title") {{Auth::user()->name}} @endsection

@section("content")
<div class="container">
	
@if(auth()->check())       
<p> {{Auth::user()->fname}} | <span style="color:brown;">Membreship Number: {{Auth::user()->id}} | </span> | <a href="">Change
                Password </a>
    </div>
@endif

        
        <div class="container ">
        <h2>UCR Booking Information</h2>


	<div class="table-responsive">
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Device Name</th>
        			<th scope="col">Device Model</th>
                    <th scope="col">Number of Booked Hours</th>
                    <th scope="col">Quantity</th>
					<th scope="col">Amount Paid</th>
       				<th scope="col">Status</th>
        			<th scope="col">Action</th>
                </tr>
            </thead>
 	          
  @foreach ($userrental as $item)
  <tr>
        @if(auth()->check() && auth()->user()->id == $item->user_id)
		<form method="POST" action="{{route('userrentalreturn')}}" id="manager-form">
		@csrf
        <label for="booking_id"><td>{{ $item->id}}</td></label>
        <input id="booking_id" name="user_booking_id" value="{{$item->id}}" hidden>	
        
        <input name="user_user_id" value="{{$item->user_id}}" hidden>
        
        <label for="user_device"><td>{{ $item->device }}</td></label>
        <input id="user_device" name="user_device" value="{{$item->device}}" hidden>
        
        <label for="user_model"><td>{{ $item->model }}</td></label>
        <input id="user_model" name="user_model" value="{{$item->model}}" hidden>
        
        <label for= "user_number_of_hour_booked"><td>{{ $item->number_of_hour_booked}}</td></label>
        <input id="user_number_of_hour_booked" name="user_number_of_hour_booked" value="{{$item->number_of_hour_booked}}" hidden>
        
		        
        <label for="user_quantity"><td>{{ $item->quantity }}</td></label>
        <input id="user_quantity" name="user_quantity" value="{{$item->quantity}}" hidden>
        
		<label for="user_amount_paid"><td>{{ $item->amount_paid}}</td></label>
        <input id="user_amount_paid" name="user_amount_paid" value="{{$item->amount_paid}}" hidden>
        
		<label for="user_status"><td>{{ $item->status}}</td></label>
        <input id="user_status" name="user_status" value="{{$item->status}}" hidden>
                                
        
 			
			<td>
           
			<button type="submit" class="btn btn-primary" id="user-submit-button">Return</button>
        	<a href="{{url('deleteuserdevice/'.$item->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the device?')">Delete</a>
   		
            </td>
      
				@endif	
			
         </tr>
		
           @endforeach
      
        </table>
        </div>
         <div class="flex-container container login-symbol">
        <figure class="figure">
            <img src="{{asset('image/update.png')}}" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption text-end"><a href="{{url('/userhistory')}}">Booking History</a></figcaption>
        </figure>

        <figure class="figure">
            <img src="{{asset('image/cancel.png')}}" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption text-end"><a href="">Cancel Your Booking</a></figcaption>
        </figure>

        <figure class="figure">
            <img src="{{asset('image/balance.png')}}" class="figure-img img-fluid rounded" alt="...">
            <figcaption class="figure-caption text-end"><a href="">Current Account Balance:</a> ${{auth::user()->balance}}</figcaption>
        </figure>
            
            

    </div>
          
            
            
        @endsection
        
        
