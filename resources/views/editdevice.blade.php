@extends("layouts.app")

@section("title") Edit Device @endsection

@section("content")

<section class="container">
        <h3 id="masterheading">Computer Detail Entry Page</h3>

        <form action="{{url('updatedevice/'.$editdevice->id)}}" method="post">
		@csrf
		@method("PUT")
		@if(session('message'))
    <h6 class="alert alert-success">
        {{ session('message') }}
    </h6>
@endif
            <div class="row g-3">
                <div class="col">
                    <label for="computerbrandedit">Computer Brand</label>
                    <select id="computerbrandedit" class="form-select" name="computerbrandedit" value="{{$editdevice->brand}}" >
                        <option selected>{{$editdevice->brand}}</option>
                    	<option >HP</option>
                        <option>Dell</option>
                    	<option>Apple</option>
                    	<option>Asus</option>
                    	<option>Lenovo</option>
                    	<option>Toshiba</option>
                    	<option>Microsoft</option>
                    </select>
                </div>
                    <div class="col">
                    <label for="computermodeledit">Computer Model</label>
                    <input type="text" class="form-control" id="computermodeledit" aria-label="First name" name="computermodeledit" value="{{$editdevice->model}}">
                </div>
                <div class="col">
                    <label for="priceedit">Price/hour($) </label>
                    <input type="number" class="form-control" id="priceedit" aria-label="Last name" name="priceedit" value="{{$editdevice->hourly_cost}}">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="operatingsystemedit">Operating System</label>
                    <input type="text" class="form-control" id="operatingsystemedit" aria-label="First name" name="operatingsystemedit" value="{{$editdevice->operating_system}}">
                </div>
                <div class="col">
                    <label for="displaysizeedit">Display Size</label>
                    <input type="text" class="form-control" id="displaysizeedit" aria-label="Last name" name="displaysizeedit"value="{{$editdevice->display_size}}">
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <label for="ramedit">RAM</label>
                    <input type="text" class="form-control" id="ramedit" aria-label="First name" name="ramedit" value="{{$editdevice->RAM}}">
                </div>
                <div class="col">
                    <label for="usbportedit">Number of USB Port</label>
                    <input type="number" class="form-control" id="usbportedit" aria-label="Last name" name="usbportedit" value="{{$editdevice->number_of_usb_port}}">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-6">
                    <label for="hdmiedit">HDMI Port</label>
                    <select id="hdmiedit" class="form-select" name="hdmiedit" value="{{$editdevice->hdmiport_available}}">
                    <option selected>{{$editdevice->hdmiport_available}}</option>    
                    <option>Available</option>
                        <option>Not Available</option>
                    </select>
                </div>
                    <div class="col-6">
                    <label for="availabilityedit">Availability</label>
                    <select id="availability" class="form-select" name="availabilityedit"  value="{{$editdevice->availability}}">
                        <option selected>{{$editdevice->availability}}</option>
                    	<option>In Stock</option>
                        <option>Out of Stock</option>
                    </select>
                </div>
            </div>
                    
                   
                    
            <div class="col-12">
                <button type="submit" class="btn btn-primary master-submit">Submit</button>
                <button class="btn btn-dark" id="master-cancel"><a href="{{route('return')}}"
                        class="master-cancel">Cancel</a></button>
            </div>
        </form>


    </section>
                    
                   
         @endsection