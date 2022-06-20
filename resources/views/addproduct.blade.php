@extends("layouts.app")

@section("title") Add Product @endsection

@section("content")
<section class="container">
        <h3 id="masterheading">Computer Detail Entry Page</h3>

        <form action="{{route('alldevice')}}" method="post">
		@csrf
            <div class="row g-3">
                <div class="col">
                    <label for="computerbrand">Computer Brand</label>
                    <select id="computerbrand" class="form-select" name="computerbrand">
                        <option selected>HP</option>
                        <option>Dell</option>
                    	<option>Apple</option>
                    	<option>Asus</option>
                    	<option>Lenovo</option>
                    	<option>Toshiba</option>
                    	<option>Microsoft</option>
                    </select>
                </div>
                    <div class="col">
                    <label for="computermodel">Computer Model</label>
                    <input type="text" class="form-control" id="computermodel" aria-label="First name" name="computermodel">
                </div>
                <div class="col">
                    <label for="price">Price/hour($) </label>
                    <input type="number" class="form-control" id="price" aria-label="Last name" name="price">
                </div>
            </div>
            <div class="row g-3">
                <div class="col">
                    <label for="operatingsystem">Operating System</label>
                    <input type="text" class="form-control" id="operatingsystem" aria-label="First name" name="operatingsystem">
                </div>
                <div class="col">
                    <label for="displaysize">Display Size</label>
                    <input type="text" class="form-control" id="displaysize" aria-label="Last name" name="displaysize">
                </div>
            </div>

            <div class="row g-3">
                <div class="col">
                    <label for="ram">RAM</label>
                    <input type="text" class="form-control" id="ram" aria-label="First name" name="ram">
                </div>
                <div class="col">
                    <label for="usbport">Number of USB Port</label>
                    <input type="number" class="form-control" id="usbport" aria-label="Last name" name="usbport">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-6">
                    <label for="hdmi">HDMI Port</label>
                    <select id="hdmi" class="form-select" name="hdmi">
                        <option selected>Available</option>
                        <option>Not Available</option>
                    </select>
                </div>
                    <div class="col-6">
                    <label for="availability">Availability</label>
                    <select id="availability" class="form-select" name="availability">
                        <option selected>In Stock</option>
                        <option>Out of Stock</option>
                    </select>
                </div>
            </div>
                    
                   
                    
            <div class="col-12">
                <button type="submit" class="btn btn-primary master-submit">Submit</button>
                <button class="btn btn-dark" id="master-cancel"><a href="{{route('home')}}"
                        class="master-cancel">Cancel</a></button>
            </div>
        </form>


    </section>
         @endsection