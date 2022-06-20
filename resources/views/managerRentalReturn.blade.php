@extends("layouts.app")

@section("title") {{Auth::user()->name}} @endsection

@section("content")
<div class="container">
	

        
        <div class="container ">
        <h2>UCR Booking Information</h2>



        <table class="table">
            <thead class="table-primary">
  
                <tr>
                    <th scope="col">Booking Number</th>
					<th scope="col">User ID</th>
                    <th scope="col">Device Name</th>
        			<th scope="col">Device Model</th>
                    <th scope="col">Number of Booked Hour</th>
                    <th scope="col">Quantity</th>
					<th scope="col">Amount Paid</th>
       				<th scope="col">Status</th>
        			<th scope="col">Action</th>
                </tr>
            </thead>
            
 
  
      
		 @foreach ($user_rental_return as $item)
<tr>
	<form method="POST" action="{{url('/userhistory')}}" id="manager-form">
		@csrf
        <label for="manager_booking_id"><td>{{ $item->id}}</td></label>
        <input id="manager_booking_id" name="manager_booking_id" value="{{$item->id}}" hidden>	
        
        <label for="manager_user_id"><td>{{ $item->user_id}}</td></label>
        <input id="manager_user_id" name="manager_user_id" value="{{$item->user_id}}" hidden>
        
                    
        <label for="manager_user_device"><td>{{ $item->device }}</td></label>
        <input id="manager_user_device" name="manager_user_device" value="{{$item->device}}" hidden>
        
        <label for="manager_user_model"><td>{{ $item->model }}</td></label>
        <input id="manager_user_model" name="manager_user_model" value="{{$item->model}}" hidden>
        
        <label for= "manager_user_number_of_hour_booked"><td>{{ $item->number_of_hour_booked}}</td></label>
        <input id="manager_user_number_of_hour_booked" name="manager_user_number_of_hour_booked" value="{{$item->number_of_hour_booked}}" hidden>
        
		        
        <label for="manager_user_quantity"><td>{{ $item->quantity }}</td></label>
        <input id="manager_user_quantity" name="manager_user_quantity" value="{{$item->quantity}}" hidden>
        
		<label for="manager_user_amount_paid"><td>{{ $item->amount_paid}}</td></label>
        <input id="manager_user_amount_paid" name="manager_user_amount_paid" value="{{$item->amount_paid}}" hidden>
        
		<label for="manager_user_status"><td>{{ $item->status}}</td></label>
        <input id="manager_user_status" name="manager_user_status" value="{{$item->status}}" hidden>
                                
        
 			
			
           <td><button type="submit" id="manager-submit-button">Release</button></td>
			
            
      
					
			
         </tr>
        
			
           @endforeach
        </table>
        
       
        @endsection