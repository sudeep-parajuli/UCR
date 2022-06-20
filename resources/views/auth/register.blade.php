@extends('layouts.app')

@section("title") Register @endsection

@section('content')
<div class="container" id="registration-form">
<h3> Registration </h3>
<form class="row g-3" method="POST" action="{{route('register')}}">
@csrf
  <div class="col-md-6">
    <label for="fname" class="form-label">{{ __('First Name') }}</label>
    <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror"
                                    name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
  </div>
  <div class="col-md-6">
    <label for="lname" class="form-label">{{ __('Last Name') }}</label>
    <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror"
                                    name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
  </div>

  <div class="col-12">
    <label for="email" class="form-label">{{ __('Email Address')}}</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
  </div>

  <div class="col-md-6">
    <label for="password" class="form-label">{{ __('Password')}}</label>
    <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
  </div>
  <div class="col-md-6">
    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
  </div>


  <div class="col-12">
    <label for="address" class="form-label">Address</label>
    <input id="address" type="text"
                                      class="form-control @error('address') is-invalid @enderror" name="address"
                                      value="{{ old('address') }}" required autocomplete="address" autofocus>

                                  @error('address')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
  </div>

  <div class="col-md-6">
    <label for="mobile_number" class="form-label">Mobile Number</label>
    <input id="mobile_number" type="number"
                                    class="form-control @error('mobile_number') is-invalid @enderror"
                                    name="mobile_number" value="{{ old('mobile_number') }}" required
                                    autocomplete="mobile_number" autofocus>

                                @error('mobile_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
  </div>
  <div class="col-md-6">
    <label for="gender" class="form-label">Gender</label>
    <select id="gender" class="form-select" name="gender">
      <option selected>Choose...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
    @error('gender')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I accept all terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form>
</div>
@endsection
