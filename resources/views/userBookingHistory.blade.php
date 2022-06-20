@extends("layouts.app")

@section("title") {{Auth::user()->name}} @endsection

@section("content")
<div class="container ">
        <h2>Booking History</h2>



        <table class="table">
            <thead class="table-danger">
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Rental Computer</th>
                    <th scope="col">Total Rental Hour</th>
                    <th scope="col">Amount Paid</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($userRentalHistory as $item)
                <tr>
            	 
                    <td>{{$item->id}}</td>
                    <td>{{$item->device_brand}}-{{$item->model}}</td>
                    <td>{{$item->number_of_hour_booked}}</td>
                    <td>{{$item->amount_paid}}</td>
            
                </tr>
            @endforeach
            </tbody>
            
        </table>

    </div>

        @endsection
        
        