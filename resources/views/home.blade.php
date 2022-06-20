@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section("title") UCR @endsection

@section('content')
<section>
       
        <section class="container-{breakpoint}">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('image/rental.jpg')}}" class="d-block w-100 cover_image img-fluid" alt="rental image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('image/rental2.jpg')}}" class="d-block w-100 cover_image img-fluid" alt="rental image">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('image/rental4.jpg')}}" class="d-block w-100 cover_image img-fluid" alt="rental image">
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid features" id="book-section">
            <h3>Three easy steps to snaffle a bargain</h3>
            <div class="row">
                <div class="col-lg-4 feature-box">
                    <i class="fas fa-solid fa-user-plus fa-3x icon"></i>
                    <a href="{{url('/register')}}"><p>Register to the system</p></a>
                </div>
                <div class="col-lg-4 feature-box">
                    <i class="fas fa-solid fa-list fa-3x icon"></i>
                    <a href = "{{url('/devicelist')}}"><p>Choose form over 100 products</p></a>
                </div>
                <div class="col-lg-4 feature-box">
                    <i class="fas fa-solid fa-bullseye icon fa-3x"></i>
                    <p>Make a booking</p>
                </div>
            </div>
            <p>If you need assistance please <a href="{{url('/contact')}}">contact </a> via phone or email</p>
        </section>

        <section class="container-fluid" id="logo-section">
            <div>
                <h3 id="book-brand">Book by Brands</h3>

                <div class="container logo-image">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('image/acer.jpg')}}" class="card-img-top computer-logo" alt="...">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('image/Apple.jpg')}}" class="card-img-top computer-logo" alt="..." style="width: 90%">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('image/dellimg.png')}}" class="card-img-top computer-logo" alt="..." >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('image/HP.jpg')}}" class="card-img-top computer-logo" alt="..." style="width: 80%">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('image/Lenovo.jpg')}}" class="card-img-top computer-logo" alt="...">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('image/Microsoft.jpg')}}" class="card-img-top computer-logo" alt="...">
                        </div>
                    </div>
                </div>
        </section>





        <section class="container description">
            <div class="row">
                <div class="col-lg">
                    <h3 id="cover">UTAS Computer Rental Services</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <br><img src="{{asset('image/rentalimg.png')}}" class="img-fluid rounded-start" id="computer-image"
                            alt="...">
                    </div>
                    <div class="col-lg-6">

                        <p class="lead" > <br><br> UTAS Computer Rental Services (UCR) provides computer rental service
                            to all staff
                            and
                            students in Hobart and Launceston at University of Tasmania. Your are able to rent various
                            brand of computers in a reasonable price. So, why to own a computer if you can rent?</p>
                    </div>
                </div>


        </section>

@endsection
