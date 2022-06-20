@extends("layouts.app")

@section("title") Device Detail @endsection

@section("content")




 <div class="container"> 
	
<form action="{{url('devicedetail/'.$devicedetail->id)}}" method="get">
    @if($devicedetail->brand == "HP")    
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/HP1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/hp2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/hp3.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/hp4.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/hp5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  

@elseif($devicedetail->brand == "Apple")    
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/apple1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/apple2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/apple3.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/apple4.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/apple5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  

@elseif($devicedetail->brand == "Asus")    
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/asus1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/asus2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/asus3.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/asus4.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/asus5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  

@elseif($devicedetail->brand == "Dell")    
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/dell1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/dell2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/dell3.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/dell4.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/dell5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  

@elseif($devicedetail->brand == "Lenovo")    
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/lenovo1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/lenovo2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/lenovo3.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/lenovo4.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/lenovo5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

@elseif($devicedetail->brand == "Toshiba")    
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/toshiba1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/toshiba2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/toshiba3.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/toshiba4.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/toshiba5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 

@elseif($devicedetail->brand == "Microsoft")    
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('image/microsoft1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/microsoft2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('image/microsoft3.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/microsoft4.jpg')}}" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="{{asset('image/microsoft5.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>  
        @endif
        <ul class="list-group">
  <li class="list-group-item" aria-current="true">Brand: <b>{{$devicedetail->brand}}</b></li>
  <li class="list-group-item">Model: <b>{{$devicedetail->model}}</b></li>
  <li class="list-group-item">Operating System: <b>{{$devicedetail->operating_system}}</b></li>
  <li class="list-group-item">RAM: <b>{{$devicedetail->RAM}}</b></li>
  <li class="list-group-item">HDMI Port: <b>{{$devicedetail->hdmiport_available}}</b></li>
   <li class="list-group-item">Number of USB Port: <b>{{$devicedetail->number_of_usb_port}}</b></li>
    <li class="list-group-item">Hourly Cost: <b>${{$devicedetail->hourly_cost}}/hour</b></li>
     <li class="list-group-item">Display Size: <b>{{$devicedetail->display_size}}</b></li>
      <li class="list-group-item">Availability: <b>{{$devicedetail->availability}}</b></li>
</ul>
        </form>
</div>
      
  
        @endsection