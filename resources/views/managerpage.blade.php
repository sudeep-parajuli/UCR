@extends("layouts.app")

@section("title") Rental Return @endsection

@section("content")
<div class="container">
	
        
        <div class="container ">
<div>        
<h2>UCR Device List</h2>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
</div>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Operating System</th>
                    <th scope="col">RAM</th>
                    <th scope="col">HDMI Port</th>
					<th scope="col">Number of USB Port</th>
					<th scope="col">Cost Per Hour</th>
					<th scope="col">Display Size</th>
       				<th scope="col">Action</th>
                </tr>
            </thead>
            
  @foreach ($returnlist as $item)
<tbody id="myTable">  
<tr>
                          
        <td>{{ $item->brand }}</td>
        <td>{{ $item->model }}</td>
        <td>{{ $item->operating_system}}</td>
		<td>{{ $item->RAM}}</td>
		<td>{{ $item->hdmiport_available}}</td>
		<td>{{ $item->number_of_usb_port}}</td>
		<td>{{ $item->hourly_cost}}</td>
		<td>{{ $item->display_size}}</td>
		
                                
        
 			
			<td>
           
			<a href="{{url('editdevice/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
    		<a href="{{url('deletedevice/'.$item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete the device?')">Delete</a>
   		
            </td>
					
			
         </tr>
         @endforeach
         </tbody>
        </table>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

        @endsection